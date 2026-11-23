# Changelog

## [Unreleased]

Regenerated with sdk-generator 1.14.0 on sdk-runtime ^1.12.0 (`composer regenerate`). 1,003 files changed, so this is a new version, not a refresh: **a call only serializes and an answer is trusted** (runtime decision D25).

- **Behavior.** A request is not validated when it is sent, and an answer is not validated when it is read: a field the API leaves out is simply not set, and a value outside a rule is returned. What you assign is still checked where you assign it: the parameter classes (`GetParams\…`, `PathParams\…`) now have the same `set` hooks as the models, so a latitude of 91 is refused on that line. A native list parameter has no hook.
- **Breaking: error classes.** Operations that declare the very same error body for a status share one class: `Responses\Errors\Status401Response` replaces one class per operation (79 error classes became 7). Code that caught `Responses\Errors\Api\V1\…\PostStatus401Response` catches `Responses\Errors\Status401Response`; `ApiException::$error` holds an instance of the shared class.
- The package is smaller (928 files, 1.10 MB generated code), and a default timeout of 30 s applies to the HTTP client (runtime).
- Requires sdk-runtime ^1.12.0.

## [0.6.0]

**The SDK now covers the Casafari REST API, not the CRM API v1.** Casafari publishes its API specification at https://docs.api.casafari.com/openapi.json (OpenAPI 3.1, 46 operations: properties, comparables, listing alerts, references, valuation, market analytics, alert webhooks and feeds, login). `contract/openapi.json` is that specification and `src/` is generated from it with sdk-generator 1.10.0 on sdk-runtime ^1.9.0.

- **Breaking.** None of the 14 CRM v1 operations is in the new specification, so the namespace `CasafariSDK\Api\Agency`, `CasafariGo`, `Leads`, `Property`, `CodeTable`, `Entity` and their models are gone. If you need the CRM API v1, stay on 0.5.x.
- Authentication follows the specification: `HTTPBearer` (token from `POST /login`, renewed with `GET /refresh-token`) and `OAuth2ClientCredentials` (recommended; `https://api.casafari.com/oauth/token`, scope `api`, 30 minute tokens). Give either to `SecurityCredentials`; the README shows both.
- The default server is `https://api.casafari.com`. The tests are rewritten for the new contract, and the facade class is `CasafariSDK\CasafariAPISDK`.

## [0.5.0]

Regenerated with sdk-generator 1.8.0 on sdk-runtime ^1.6.0. No change to what the SDK accepts or sends: a model whose property is a list of nested models now builds them inline, which takes less time per call for answers with lists of objects.

## [0.4.0]

Regenerated with sdk-generator 1.7.0 on sdk-runtime ^1.5.0. No change to what the SDK accepts or sends: 80 models now convert their common JSON members (scalars, enum cases, plain nested models, lists of scalars) inline, which takes about 9% less time per call on PHP 8.4 than 0.3.0.

## [0.3.0]

Regenerated with sdk-generator 1.6.0 on sdk-runtime ^1.4.2. **PHP 8.4 is now the minimum.**

- A model checks each value where it enters it: every property that has rules has a `set` hook, so `$filter->price_from = -1` raises right away and the value is not stored. Nothing is validated again when a request is sent; `$model->validate()` checks everything on demand.
- The range of `int32` properties is asserted.
- A property with a hook cannot be unset (`unset($model->x)` is an error in PHP 8.4); assign a value instead.
- A list stored in a plain array property is not checked when edited in place (`$model->ids[] = 1`); assign the whole list.

## [0.2.0] — unreleased

The hand-written SDK is replaced by one generated from the CRM Swagger contract (`contract/v1.json`, moved from
`src/Core/v1.json`) with sdk-generator 1.5.0 on sdk-runtime ^1.2. The 14 operations are the same; the namespace,
class and method names changed (see "Moving from 0.1" in the README).

- `src/` is generated; `composer regenerate` rewrites it and `composer regenerate:check` (also a test) fails if it
  differs from the contract.
- Requests and answers are typed and validated; unknown fields in an answer are ignored; failures are
  `ApiException` or `InvalidResponseException`.
- `LogMiddleware` and `EchoMiddleware` now implement the runtime's `HttpMiddlewareInterface` and live in `lib/`.
- Follows the contract where 0.1 differed: boolean query parameters are `true`/`false`; `FilterRq::Locations` is a
  single `LocationList`.
- Requires `dmorenof/sdk-runtime` ^1.2 (which brings Guzzle and typedarray); no longer requires
  `alexanderpas/http-enum` or `typedarray/typedarray` directly.
- 13 tests: every contract operation, query names, nested typed lists, errors, enums, middleware and the
  regeneration check.

## [0.1.0]

First public release: hand-written SDK for the CRM API v1.
