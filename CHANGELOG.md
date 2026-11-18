# Changelog

## [0.2.0] — unreleased

The hand-written SDK is replaced by one generated from the CRM Swagger contract (`contract/v1.json`, moved from
`src/Core/v1.json`) with sdk-generator 1.4.0 on sdk-runtime ^1.1. The 14 operations are the same; the namespace,
class and method names changed (see "Moving from 0.1" in the README).

- `src/` is generated; `composer regenerate` rewrites it and `composer regenerate:check` (also a test) fails if it
  differs from the contract.
- Requests and answers are typed and validated; unknown fields in an answer are ignored; failures are
  `ApiException` or `InvalidResponseException`.
- `LogMiddleware` and `EchoMiddleware` now implement the runtime's `HttpMiddlewareInterface` and live in `lib/`.
- Follows the contract where 0.1 differed: boolean query parameters are `true`/`false`; `FilterRq::Locations` is a
  single `LocationList`.
- Requires `dmorenof/sdk-runtime` ^1.1 (which brings Guzzle and typedarray); no longer requires
  `alexanderpas/http-enum` or `typedarray/typedarray` directly.
- 13 tests: every contract operation, query names, nested typed lists, errors, enums, middleware and the
  regeneration check.

## [0.1.0]

First public release: hand-written SDK for the CRM API v1.
