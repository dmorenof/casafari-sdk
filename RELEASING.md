# Releasing Casafari SDK

**Current public baseline:** [v0.1.0](https://github.com/dmorenof/casafari-sdk/releases/tag/v0.1.0)
at commit `121295207bc8b6f3d2a003413dee8a20ba4d81ae`.
It was tagged and released manually. It must never be retagged or overwritten.

- Package: https://packagist.org/packages/dmorenof/casafari-sdk
- Default branch: `master` (protected)
- PHP: `>=8.3`
- License: MIT for the SDK's own code, with third-party notices in `NOTICE.md`
- Source API contract: Casafari **CRM** Swagger snapshot `src/Core/v1.json`,
  not the distinct Casafari REST API
- Automated unit tests mock HTTP; no authorized live CRM integration test is
  performed by CI.

## Future versions

The workflow `.github/workflows/release.yml` automates publication **only
after** a pull request changing the root `VERSION` file merges to `master`.

1. Create a release PR against `master`, updating `VERSION` to the next
   numeric semantic version (e.g. `0.1.1`; **no** leading `v`).
   Make sure all intended implementation changes are already included.
2. Review the diff, dependency alerts and compatibility impact.
3. Await mandatory GitHub status checks: `test` and `validate`.
   Additional CI jobs cover newer PHP versions, minimum dependencies and
   Composer security advisories. Do not merge with failing checks.
4. Merge the release PR. The publication workflow reads `VERSION`, validates
   the manifest, installs dependencies, runs PHP syntax checks and PHPUnit,
   and audits dependencies **before** creating a Git tag.
5. If the tag is new, the workflow creates `vX.Y.Z` pointing to that precise
   merge commit and publishes GitHub Release notes. Existing tags are
   **never moved or overwritten**. If a tag exists at a different commit,
   publication is skipped, even on manual reruns.
6. Verify the new tag and release in GitHub, then verify synchronization
   at https://packagist.org/packages/dmorenof/casafari-sdk.
   If webhook sync is delayed, use Packagist's Update action.
7. Smoke-test installation in a clean PHP 8.3+ consumer project:
   
   ```sh
   composer require dmorenof/casafari-sdk:^0.1
   ```

The first merge that introduces `VERSION=0.1.0` does **not** recreate
`v0.1.0`: the workflow detects the existing tag and leaves it alone.

## Library-specific points

- Composer determines the package version from the Git tag: do not add a
  `version` field to `composer.json`.
- Do not commit `composer.lock` to this library merely to get CI passing;
  testing lowest and currently resolvable dependency versions is intentional.
- Never embed an API access token in CI, logs, test fixtures or releases.
- Review third-party specifications and the terms under which any copies of
  their material may be redistributed; the MIT license cannot grant rights
  to third-party material.
- Avoid promises of live API compatibility until an authorized integration
  test has actually been performed.
- Packagist versions are immutable. Fix mistakes in a **new** patch release;
  never force-update an already published tag.

Packagist immutability background:
https://blog.packagist.com/immutable-versions-on-packagist/
