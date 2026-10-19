<?php

namespace CasafariSDK\DTOs;

/**
 * AgencySearchFilters: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencySearchFilters.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencySearchFilters extends \CasafariSDK\Core\DTO
{
    public string $Name;
    public int $CountryId;
    public int $RegionId;
    public int $CityId;
    public int $LocalityId;
    public \CasafariSDK\TypedArrays\IntegersArray $LocationIds;
    public \CasafariSDK\TypedArrays\IntegersArray $AgenciesIds;
    public bool $IncludeChildAgencies;
    public bool $OnlyChildAgencies;
    public int $AgencyHierarchyId;
    public \CasafariSDK\TypedArrays\IntegersArray $ParentIds;
    public bool $ShowOnlyVisibleOnWebsite;
    public bool $ExtraField1;
    public bool $IsShop;
}
