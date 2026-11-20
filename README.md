# Casafari SDK

[![PHP SDK CI](https://github.com/dmorenof/casafari-sdk/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/dmorenof/casafari-sdk/actions/workflows/ci.yml)
[![Composer validation](https://github.com/dmorenof/casafari-sdk/actions/workflows/composer-validation.yml/badge.svg?branch=master)](https://github.com/dmorenof/casafari-sdk/actions/workflows/composer-validation.yml)
[![Packagist Version](https://img.shields.io/packagist/v/dmorenof/casafari-sdk)](https://packagist.org/packages/dmorenof/casafari-sdk)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)

Unofficial PHP SDK for the **Casafari REST API** (properties, comparables, listing alerts, references, valuation,
market analytics, alert webhooks and feeds).
The code in `src/` is **generated** from the API's OpenAPI contract (`contract/openapi.json`, published by Casafari at
<https://docs.api.casafari.com/openapi.json>) by [sdk-generator](https://github.com/dmorenof/sdk-generator) and runs on
[sdk-runtime](https://github.com/dmorenof/sdk-runtime): typed models, typed collections, validation where a value
enters a model (when you set a property or when an answer is read), one exception type per kind of failure. Nothing in
`src/` is edited by hand.

> **0.6.0 replaced the CRM API v1 with this API.** The two share no operations. For the CRM API v1 use 0.5.x.

## Installation

PHP 8.4 or later.

```bash
composer require dmorenof/casafari-sdk
```

## Setup and authentication

The production server (`https://api.casafari.com`) is the default. The API declares two security schemes; give the
SDK whichever you have, keyed by the scheme's name.

**OAuth2 client credentials (recommended).** Create a client in Casafari's Settings, API Clients. The runtime fetches
the token, keeps it for its 30 minutes and renews it:

```php
use CasafariSDK\Client;
use CasafariSDK\Configuration;
use Dmorenof\SdkRuntime\Security\{OAuth2Client, OAuth2ClientCredentials, OAuth2Endpoints, OAuth2Options, SecurityCredentials};

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials([
    'OAuth2ClientCredentials' => new OAuth2ClientCredentials(
        new OAuth2Endpoints('https://api.casafari.com/oauth/token'),
        new OAuth2Client($clientId, $clientSecret),
        new OAuth2Options(scopes: ['api']),
    ),
]);

$client = Client::connect($configuration);
```

**Bearer token.** `POST /login` returns an `access_token` and a `refresh_token`; pass the access token as a string
and renew it yourself with `GET /refresh-token`:

```php
$configuration->securityCredentials = new SecurityCredentials(['HTTPBearer' => $accessToken]);
```

`Configuration` also takes `httpClient` (any PSR-18 client), `middleware`, `retryPolicy`, `redirectPolicy`; see the
[runtime documentation](https://github.com/dmorenof/sdk-runtime/tree/main/docs).

## Calling operations

Each route is one class under `CasafariSDK\Resources\` (instance) and `CasafariSDK\Api\` (static facade) named after
its path; the request body and the query parameters are typed models.

```php
use CasafariSDK\GetParams\Api\V1\References\Locations\ByCoordinates;
use CasafariSDK\Resources\Api\V1\References\Locations\ByCoordinates as LocationByCoordinates;

$params = new ByCoordinates();
$params->latitude = 41.3874;     // -90..90: a value outside the range is refused when you call, nothing is sent
$params->longitude = 2.1686;

$location = $client->resource(LocationByCoordinates::class)->get($params);   // ReferenceLocationV1
echo $location->name;
```

Or with the facade, configured once:

```php
\CasafariSDK\CasafariAPISDK::configure($configuration);
$types = \CasafariSDK\Api\V1\References\Types::get();
```

A body can also be built from decoded JSON: `new RequestSchema($jsonObject)`. Reading a property that was never set
throws; test with `isset()`.

## Errors

| Exception | When |
| --- | --- |
| `Dmorenof\SdkRuntime\ApiException` | The API answered with a failing status. `$e->getCode()` is the status, `$e->response->body` the raw body. |
| `Dmorenof\SdkRuntime\InvalidResponseException` | A success answer that does not fit the contract. `$e->response` keeps the raw answer. |
| `UnexpectedValueException` / `TypeError` | What you build does not fit the contract (a value outside a range or an enum, a wrong type); nothing is sent. |

A value is checked where it enters a model: a body or an answer is checked when you set a property or when it is read
(`$login->password = ''` raises at once), and the parameters of a call are checked once when the call is made, before
anything is sent. `$model->validate()` checks everything on demand.

## Middleware

`CasafariSDK\Middlewares\LogMiddleware` (error log) and `EchoMiddleware` (standard output) show requests and responses.
They implement the runtime's `HttpMiddlewareInterface`, so you can write your own:

```php
$configuration->middleware = [new \CasafariSDK\Middlewares\LogMiddleware()];
```

## Regenerating

`src/` is a build output. To follow a new version of the contract, download it again and run:

```bash
curl -o contract/openapi.json https://docs.api.casafari.com/openapi.json
composer install
composer regenerate          # rewrites src/
composer regenerate:check    # fails if src/ differs from the contract (also run by the tests)
```

## Releasing

See [RELEASING.md](RELEASING.md). Automated tests mock HTTP; none runs against the live service.
