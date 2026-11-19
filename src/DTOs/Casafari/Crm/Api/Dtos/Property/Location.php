<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Location
 */
final class Location extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'locationId' => [
        'format' => 'int32',
    ],
];

    public string $address;
    public string $cityName;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\Coordinates $coordinates;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Location\CountryCodeEnum $countryCode;
    public string $localityName;
    /**
     * Format: int32
     */
    public int $locationId {
        set {
            $this->assigning('locationId', $value);
            $this->locationId = $value;
        }
    }
    public string $regionName;
    public string $zipcode;
    public string $zone;

}
