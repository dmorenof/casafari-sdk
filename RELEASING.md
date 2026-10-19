# Releasing the Casafari CRM SDK on Packagist

## Current package state

- Packagist package: https://packagist.org/packages/dmorenof/casafari-sdk
- GitHub repository: https://github.com/dmorenof/casafari-sdk
- As of 2026-10-19 the package is already listed, with `dev-master` and
  `dev-develop` and automatic updates, but has no versioned release.
- Version numbers are inferred from Git tags. Do **not** add a `version`
  field to `composer.json`.

## Release checklist (do not skip)

1. Review ownership and redistribution rights for any third-party API
   documentation or specifications, especially `src/Core/v1.json`.
2. Confirm the MIT license text and separate Casafari disclaimer. Do not
   represent third-party materials as MIT licensed unless authorized.
3. Review and merge the CRM functionality PR after verifying its compatibility
   with a current authorized Casafari CRM contract. No live API tests are
   provided by the mock-only suite.
4. Ensure the release branch has its complete `composer.json`, SDK classes,
   current README and a passing CI run. Confirm there are no credentials
   in the history or release archive.
5. On the final tested commit, run:
   
   ```sh
   composer validate --strict
   composer install --no-interaction --prefer-dist
   vendor/bin/phpunit -c phpunit.xml
   ```

6. Choose a version. `v0.1.0` is a suggested first public stable-tagged
   package version if the external CRM contract is still under validation.
   The tag name is **not** a claim of production-readiness.
7. After merging and confirming the intended commit, create and push a Git tag
   on that **specific** commit, then optionally a GitHub Release:
   
   ```sh
   git fetch origin --tags
   git switch master
   git pull --ff-only
   git tag -a v0.1.0 -m "First public Casafari CRM SDK release"
   git push origin v0.1.0
   ```

8. Check https://packagist.org/packages/dmorenof/casafari-sdk for the new
   tagged version. If automatic sync does not occur, use the package's
   Packagist Update action / GitHub sync settings.
9. Test installation in a **clean** PHP 8.3+ project:
   
   ```sh
   composer require dmorenof/casafari-sdk:^0.1
   ```

10. Publish release notes describing SDK features, breaking changes and
    the lack of validation against a live Casafari CRM account.

## Important versioning constraint

Packagist has made stable-version metadata immutable. Never force-move
published version tags, and do not tag a branch before checking its final
commit. Publish a new patch version for any corrective changes.

Reference: https://blog.packagist.com/immutable-versions-on-packagist/
