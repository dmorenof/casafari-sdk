<?php

namespace CasafariSDK\DTOs;

/**
 * AgencyLocaleDto: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencyLocaleDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencyLocaleDto extends \CasafariSDK\Core\DTO
{
    public int $AgencyID;
    public int $CultureID;
    public string $AgencyDescription;
}
