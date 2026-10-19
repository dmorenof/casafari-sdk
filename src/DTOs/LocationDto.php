<?php

namespace CasafariSDK\DTOs;

/**
 * LocationDto: typed representation of Casafari.Crm.Api.Dtos.Location.LocationDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LocationDto extends \CasafariSDK\Core\DTO
{
    public \CasafariSDK\DTOs\IdValueModel $Country;
    public \CasafariSDK\DTOs\IdValueModel $Region;
    public \CasafariSDK\DTOs\IdValueModel $City;
    public \CasafariSDK\DTOs\IdValueModel $Locality;
}
