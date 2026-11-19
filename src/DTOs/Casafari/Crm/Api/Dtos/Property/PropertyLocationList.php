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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'City' => is_string($value) ? $this->City = $value : parent::assignMember($name, $value),
            'Country' => is_string($value) ? $this->Country = $value : parent::assignMember($name, $value),
            'Description' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Description = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyLocationList\DescriptionCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyLocationDescription::class)) : parent::assignMember($name, $value),
            'InnerLocation' => $value instanceof \stdClass ? $this->InnerLocation = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocation($value) : parent::assignMember($name, $value),
            'Locality' => is_string($value) ? $this->Locality = $value : parent::assignMember($name, $value),
            'Region' => is_string($value) ? $this->Region = $value : parent::assignMember($name, $value),
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'cityName' => is_string($value) ? $this->cityName = $value : parent::assignMember($name, $value),
            'coordinates' => $value instanceof \stdClass ? $this->coordinates = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\Coordinates($value) : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\PropertyLocationList\CountryCodeEnum::from($value) : parent::assignMember($name, $value),
            'localityName' => is_string($value) ? $this->localityName = $value : parent::assignMember($name, $value),
            'locationId' => is_int($value) ? $this->locationId = $value : parent::assignMember($name, $value),
            'regionName' => is_string($value) ? $this->regionName = $value : parent::assignMember($name, $value),
            'zipcode' => is_string($value) ? $this->zipcode = $value : parent::assignMember($name, $value),
            'zone' => is_string($value) ? $this->zone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
