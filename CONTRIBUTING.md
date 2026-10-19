# Contributing to Casafari SDK

Thank you for helping maintain this **unofficial** Casafari CRM API client.

## Workflow

1. Create a topic branch from `master` (`feature/*`, `fix/*`).
2. Keep transport, DTO hydration, API endpoints and business-facing methods
   independent. Reuse an existing abstraction before adding an overlapping one.
3. Add or update mocked HTTP tests and contract tests for any observable SDK
   change. Never check in API credentials or personal CRM data.
4. Open a pull request against `master`. Direct pushes to `master` are
   blocked by the repository ruleset; the `test` and `validate` checks are
   required before merge.
5. Confirm compatibility across supported PHP versions and minimum permitted
   Composer dependencies. The CI provides those additional checks.

## Local verification

Use PHP 8.3+ and Composer 2:

```sh
composer validate --strict --no-check-lock
composer install --no-interaction --prefer-dist
find src Tests -name '*.php' -print0 | xargs -0 -n1 php -l
vendor/bin/phpunit -c phpunit.xml
composer audit --no-interaction
```

The SDK targets a saved **Casafari CRM API v1** contract, not the separate
Casafari REST/Platform API. Tests use mocked requests and responses, and do not
verify connectivity to Casafari's live service.

## Versions

Do not edit published Git tags or GitHub Releases. See [RELEASING.md](RELEASING.md)
for the `VERSION`-driven release automation introduced after `v0.1.0`.
