<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyLocationList extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'locationId' => [
        'format' => 'int32',
    ],
];

    public string $City;
    public string $Country;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyLocationList\DescriptionCollection $Description;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocation $InnerLocation;
    public string $Locality;
    public string $Region;
    public string $address;
    public string $cityName;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\Coordinates $coordinates;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\PropertyLocationList\CountryCodeEnum $countryCode;
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
