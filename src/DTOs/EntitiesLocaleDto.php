<?php

namespace CasafariSDK\DTOs;

/**
 * EntitiesLocaleDto: typed representation of Casafari.Crm.Api.Dtos.Entity.EntitiesLocaleDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class EntitiesLocaleDto extends \CasafariSDK\Core\DTO
{
    public int $EntityID;
    public int $CultureID;
    public string $Title;
    public string $ShortDescription;
    public string $Description;
    public string $DescriptionLuxury;
}
