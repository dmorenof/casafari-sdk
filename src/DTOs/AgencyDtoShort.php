<?php

namespace CasafariSDK\DTOs;

/**
 * AgencyDtoShort: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencyDtoShort.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencyDtoShort extends \CasafariSDK\Core\DTO
{
    public int $AgencyID;
    public string $AgencyName;
    public string $LogoPath;
    public int $ParentID;
}
