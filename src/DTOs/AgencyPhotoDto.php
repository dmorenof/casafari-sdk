<?php

namespace CasafariSDK\DTOs;

/**
 * AgencyPhotoDto: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencyPhotoDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencyPhotoDto extends \CasafariSDK\Core\DTO
{
    public int $AgencyPhotoID;
    public int $AgencyID;
    public string $Path;
    public int $Sortorder;
}
