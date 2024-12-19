<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\Entities;

use CasafariSDK\Core\Entity;

/**
 * Casafari Coordinates object
 * <code>
 * {
 *     "latitude": "string",
 *     "longitude": "string",
 *     "visible": true
 * }
 * </code>
 */
class Coordinates extends Entity
{
    public string $latitude;
    public string $longitude;
    public bool $visible;
}