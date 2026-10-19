<?php

namespace CasafariSDK\DTOs;

/**
 * SystemUserEntitySearchFilters: typed representation of Casafari.Crm.Api.Dtos.Entity.SystemUserEntitySearchFilters.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class SystemUserEntitySearchFilters extends \CasafariSDK\Core\DTO
{
    public string $Name;
    public int $CountryId;
    public int $LocalityId;
    public int $RegionId;
    public int $CityId;
    public \CasafariSDK\TypedArrays\IntegersArray $AgencyIds;
    public \CasafariSDK\TypedArrays\IntegersArray $AgentIds;
    public \CasafariSDK\TypedArrays\IntegersArray $LocationIds;
    public bool $IncludeChildrenAgencies;
    public bool $GetInactive;
}
