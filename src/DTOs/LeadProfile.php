<?php

namespace CasafariSDK\DTOs;

/**
 * LeadProfile: typed representation of Casafari.Crm.Api.Dtos.Lead.LeadProfile.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LeadProfile extends \CasafariSDK\Core\DTO
{
    public bool $ForceNewProfileToExistingContact;
    public \CasafariSDK\DTOs\LeadFromTo $Bedrooms;
    public \CasafariSDK\DTOs\LeadFromTo $Price;
    public \CasafariSDK\DTOs\LeadFromTo $Bathrooms;
    public \CasafariSDK\DTOs\LeadFromTo $HouseArea;
    public \CasafariSDK\DTOs\LeadFromTo $LandArea;
    public \CasafariSDK\TypedArrays\LeadProfilePropertyTypeEnumsArray $PropertyType;
    public \CasafariSDK\TypedArrays\StringsArray $Regions;
    public \CasafariSDK\TypedArrays\StringsArray $Cities;
    public \CasafariSDK\TypedArrays\StringsArray $Localities;
    public \CasafariSDK\TypedArrays\StringsArray $Zone;
    public string $Note;
}
