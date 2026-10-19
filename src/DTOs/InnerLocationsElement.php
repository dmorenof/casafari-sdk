<?php

namespace CasafariSDK\DTOs;

/**
 * InnerLocationsElement: typed representation of Casafari.Crm.Api.Dtos.Property.InnerLocationsElement.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class InnerLocationsElement extends \CasafariSDK\Core\DTO
{
    public int $id;
    public string $name;
    public int $cityId;
    public int $regionId;
    public int $countryId;
}
