<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\Entities;

use CasafariSDK\Core\Entity;
use CasafariSDK\Enums\CountryEnum;

/**
 * Casafari Location object
 * <code>
 * {
 *     "coordinates": {},
 *     "countryCode": "pt",
 *     "locationId": 0,
 *     "zone": "string",
 *     "address": "string",
 *     "zipcode": "string",
 *     "regionName": "string",
 *     "cityName": "string",
 *     "localityName": "string"
 * }
 * </code>
 */
class Location extends Entity
{
    public Coordinates $coordinates;
    public CountryEnum $countryCode;
    public int $locationId;
    public string $zone;
    public string $address;
    public string $zipcode;
    public string $regionName;
    public string $cityName;
    public string $localityName;
}