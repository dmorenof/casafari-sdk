<?php

namespace CasafariSDK\DTOs;

/**
 * LocationsLookups: typed representation of Casafari.Crm.Api.Dtos.Location.LocationsLookups.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LocationsLookups extends \CasafariSDK\Core\DTO
{
    public \CasafariSDK\TypedArrays\IdValueModelsArray $Regions;
    public \CasafariSDK\TypedArrays\IdValueModelsArray $Countries;
    public \CasafariSDK\TypedArrays\IdValueModelsArray $Localities;
    public \CasafariSDK\TypedArrays\IdValueModelsArray $Cities;
}
