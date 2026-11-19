# Changelog

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
