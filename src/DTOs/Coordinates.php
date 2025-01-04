<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

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
class Coordinates extends DTO
{
    public string $latitude;
    public string $longitude;
    public bool $visible;
}