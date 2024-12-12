<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\Entities;

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
class Coordinates
{
    public string $latitude;
    public string $longitude;
    public bool $visible;
}