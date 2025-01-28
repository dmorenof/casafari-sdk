<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
use CasafariSDK\Enums\CountryEnum;
use CasafariSDK\TypedArrays\PropertyLocationDescriptionsArray;

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
class LocationList extends DTO
{
    public string $Country;
    public string $Region;
    public string $City;
    public string $Locality;
    public PropertyLocationDescriptionsArray $Description;
    public InnerLocation $InnerLocation;
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