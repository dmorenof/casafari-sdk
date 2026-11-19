<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadProfile extends \Dmorenof\SdkRuntime\DTO
{
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $Bathrooms;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $Bedrooms;
    public \CasafariSDK\Collections\StringCollection $Cities;
    public bool $ForceNewProfileToExistingContact;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $HouseArea;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $LandArea;
    public \CasafariSDK\Collections\StringCollection $Localities;
    public string $Note;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $Price;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\LeadProfile\PropertyTypeCollection $PropertyType;
    public \CasafariSDK\Collections\StringCollection $Regions;
    public \CasafariSDK\Collections\StringCollection $Zone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Bathrooms' => $value instanceof \stdClass ? $this->Bathrooms = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo($value) : parent::assignMember($name, $value),
            'Bedrooms' => $value instanceof \stdClass ? $this->Bedrooms = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo($value) : parent::assignMember($name, $value),
            'Cities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->Cities = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'ForceNewProfileToExistingContact' => is_bool($value) ? $this->ForceNewProfileToExistingContact = $value : parent::assignMember($name, $value),
            'HouseArea' => $value instanceof \stdClass ? $this->HouseArea = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo($value) : parent::assignMember($name, $value),
            'LandArea' => $value instanceof \stdClass ? $this->LandArea = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo($value) : parent::assignMember($name, $value),
            'Localities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->Localities = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'Note' => is_string($value) ? $this->Note = $value : parent::assignMember($name, $value),
            'Price' => $value instanceof \stdClass ? $this->Price = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo($value) : parent::assignMember($name, $value),
            'Regions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->Regions = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'Zone' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->Zone = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
