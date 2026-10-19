<?php

namespace CasafariSDK\DTOs;

/**
 * AgencyIncludes: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencyIncludes.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencyIncludes extends \CasafariSDK\Core\DTO
{
    public bool $IncludeLocales;
    public bool $IncludePhotos;
    public bool $IncludeBrokers;
    public bool $IncludeHierarchies;
}
