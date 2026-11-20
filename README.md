# Casafari SDK

[![PHP SDK CI](https://github.com/dmorenof/casafari-sdk/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/dmorenof/casafari-sdk/actions/workflows/ci.yml)
[![Composer validation](https://github.com/dmorenof/casafari-sdk/actions/workflows/composer-validation.yml/badge.svg?branch=master)](https://github.com/dmorenof/casafari-sdk/actions/workflows/composer-validation.yml)
[![Packagist Version](https://img.shields.io/packagist/v/dmorenof/casafari-sdk)](https://packagist.org/packages/dmorenof/casafari-sdk)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the **Casafari CRM API v1** (agencies, agents, leads, properties, locations, code tables).
The code in `src/` is **generated** from the API's Swagger contract (`contract/v1.json`) by
[sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on [sdk-runtime](https://github.com/dmorenof/sdk-runtime):
typed models, typed collections, validation where a value enters a model (when you set a property or when an answer is read), one exception type per kind of failure. Nothing in `src/`
is edited by hand.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/casafari-sdk
```

## Setup

The production server is the default. Credentials go in the `Authorization` header (the contract declares no
security scheme, so the value is sent exactly as you give it):

```php
use CasafariSDK\Client;
use CasafariSDK\Configuration;

$configuration = new Configuration();
$configuration->headers = ['Authorization' => 'Basic <YOUR_ACCESS_TOKEN>'];
// $configuration->baseUrl = 'https://crmapi.proppydev.com'; // development server

$client = Client::connect($configuration);
```

`Configuration` also takes `httpClient` (any PSR-18 client), `middleware`, `retryPolicy`, `redirectPolicy`; see the
[runtime documentation](https://github.com/dmorenof/sdk-runtime/tree/main/docs).

## Calling operations

Each route is one class under `CasafariSDK\Resources\` (instance) and `CasafariSDK\Api\` (static facade); the request
body is a typed model. Names follow the route: `POST /api/Property/ListProperties` is `Property\ListProperties::post()`.

```php
use CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\FilterRq;
use CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationList;
use CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\LocationList\CountryCodeEnum;
use CasafariSDK\Resources\Api\Property\ListProperties;

$filter = new FilterRq();
$filter->Active = true;
$filter->Locations = new LocationList();
$filter->Locations->CountryCode = CountryCodeEnum::Es;

$response = $client->resource(ListProperties::class)->post($filter);   // PropertyListRs
```

Or with the facade, configured once:

```php
\CasafariSDK\ExternalApiVersionSDK::configure($configuration);
$response = \CasafariSDK\Api\Property\ListProperties::post($filter);
```

A body can also be built from decoded JSON: `new FilterRq($jsonObject)`. Query parameters travel in a parameters
object, e.g. `CodeTable`:

```php
$params = new \CasafariSDK\GetParams\Api\CodeTable();
$params->rqIncludeBusinessTypes = true;   // wire name rq.includeBusinessTypes
$params->rqLang = 724;
$codes = $client->resource(\CasafariSDK\Resources\Api\CodeTable::class)->get($params);
```

Reading a property that was never set throws; test with `isset()`.

## Errors

| Exception | When |
| --- | --- |
| `Dmorenof\SdkRuntime\ApiException` | The API answered with a failing status. `$e->getCode()` is the status, `$e->response->body` the raw body. |
| `Dmorenof\SdkRuntime\InvalidResponseException` | A success answer that does not fit the contract. `$e->response` keeps the raw answer. |
| `UnexpectedValueException` / `TypeError` | What you build does not fit the contract (a value outside an enum, a wrong type); nothing is sent. |

The API reports business errors inside a `200` answer (`Success` missing, `Errors` filled); the SDK returns that
model as is, so check `$response->Success` and `$response->Errors` yourself.

## Middleware

`CasafariSDK\Middlewares\LogMiddleware` (error log) and `EchoMiddleware` (standard output) show requests and responses.
They implement the runtime's `HttpMiddlewareInterface`, so you can write your own:

```php
$configuration->middleware = [new \CasafariSDK\Middlewares\LogMiddleware()];
```

## Regenerating

`src/` is a build output. To follow a new contract, replace `contract/v1.json` and run:

```bash
composer install
composer regenerate          # rewrites src/
composer regenerate:check    # fails if src/ differs from the contract (also run by the tests)
```

## Moving from 0.1

0.2 replaces the hand-written SDK; the namespace and method names changed, the 14 operations did not.

| 0.1 | 0.2 |
| --- | --- |
| `AgencyApi::getAgencies(AgencyListRequest)` | `Api\Agency\GetAgencies::post(AgencyListExternalRq)` |
| `CasafariGoApi::getUrl / createUser / deleteUser` | `Api\CasafariGo\GetUrl / CreateUser / DeleteUser::post(...)` |
| `CodeTableApi::getCodeTable(CodeTableRequest)` | `Api\CodeTable::get(GetParams\Api\CodeTable)` |
| `EntityApi::getAgents(AgentListRequest)` | `Api\Entity\GetAgents::post(SystemUserRq)` |
| `LeadApi::insertLead / listLeads` | `Api\Leads\Insert::post(LeadRq)` / `Api\Leads\ListResource::post(GetLeadRq)` |
| `PropertyApi::sendProperty / deleteProperty` | `Api\Property\SendProperty / DeleteProperty::post(PropertyRq)` |
| `PropertyApi::getPropertyList / getLocations` | `Api\Property\ListProperties::post(FilterRq)` / `Api\Property\Location::post(LocationRq)` |
| `PropertyApi::getInnerLocations() / recordHit()` | `Api\Property\InnerLocations::post()` / `Api\Property\Hit::post(HitRq)` |
| `new XApi($server, $token)` | `Client::connect($configuration)` with `Authorization` in `headers` |
| `Requests\*`, `Responses\*`, `TypedArrays\*` | `DTOs\Casafari\Crm\Api\Dtos\...`, `Collections\...` (the contract's own names) |

Behavior that differs from 0.1 and follows the contract:

- A boolean query parameter is sent as `true`/`false` (0.1 sent `1`/`0`).
- `FilterRq::Locations` is one `LocationList` object, as the contract defines it; 0.1 modelled it as a list.
- Requests and answers are validated: a wrong type or a value outside an enum is refused, and unknown fields in
  an answer are ignored. A value is checked once, where it enters a model: `$filter->price_from = -1` raises at
  once and the value is not stored, and nothing is checked again when the request is sent (`$model->validate()`
  checks everything on demand). Since 0.3.0 PHP 8.4 is the minimum.

## Releasing

See [RELEASING.md](RELEASING.md). The contract is the CRM Swagger snapshot `contract/v1.json`, not the distinct
Casafari REST API. Automated tests mock HTTP; none runs against the live service.
