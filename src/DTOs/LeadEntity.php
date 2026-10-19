<?php

namespace CasafariSDK\DTOs;

/**
 * LeadEntity: typed representation of Casafari.Crm.Api.Dtos.Lead.LeadEntity.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LeadEntity extends \CasafariSDK\Core\DTO
{
    public string $Name;
    public string $Email;
    public string $Phone;
    public string $Message;
    public string $Address;
    public string $Location;
    public \CasafariSDK\Enums\LanguageEnum $Culture;
    public \CasafariSDK\Enums\LeadEntityCountryISOEnum $CountryISO;
    public \CasafariSDK\Enums\LeadEntityTypeEnum $Type;
    public \CasafariSDK\DTOs\LeadProfile $Profile;
    public string $Nationality;
}
