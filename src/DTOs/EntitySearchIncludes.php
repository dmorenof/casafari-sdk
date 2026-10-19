<?php

namespace CasafariSDK\DTOs;

/**
 * EntitySearchIncludes: typed representation of Casafari.Crm.Api.Dtos.Entity.EntitySearchIncludes.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class EntitySearchIncludes extends \CasafariSDK\Core\DTO
{
    public bool $IncludeAgencies;
    public bool $IncludeLocales;
    public bool $IncludeEntityFiles;
    public bool $IncludeAgenciesLocales;
}
