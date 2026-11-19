<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadEntity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Name',
];

    public string $Address;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\CountryISOEnum $CountryISO;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\CultureEnum $Culture;
    public string $Email;
    public string $Location;
    public string $Message;
    public string $Name;
    public string $Nationality;
    public string $Phone;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadProfile $Profile;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\TypeEnum $Type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Address' => is_string($value) ? $this->Address = $value : parent::assignMember($name, $value),
            'CountryISO' => is_string($value) ? $this->CountryISO = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\CountryISOEnum::from($value) : parent::assignMember($name, $value),
            'Culture' => is_string($value) ? $this->Culture = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\CultureEnum::from($value) : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'Location' => is_string($value) ? $this->Location = $value : parent::assignMember($name, $value),
            'Message' => is_string($value) ? $this->Message = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Nationality' => is_string($value) ? $this->Nationality = $value : parent::assignMember($name, $value),
            'Phone' => is_string($value) ? $this->Phone = $value : parent::assignMember($name, $value),
            'Profile' => $value instanceof \stdClass ? $this->Profile = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadProfile($value) : parent::assignMember($name, $value),
            'Type' => is_string($value) ? $this->Type = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
