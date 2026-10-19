<?php

namespace CasafariSDK\Responses;

/**
 * PropertyInnerLocationResponse: typed representation of Casafari.Crm.Api.Dtos.Property.InnerLocationRs.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class PropertyInnerLocationResponse extends \CasafariSDK\Core\Response
{
    public \CasafariSDK\TypedArrays\InnerLocationsElementsArray $Countries;
    public \CasafariSDK\TypedArrays\InnerLocationsElementsArray $Regions;
    public \CasafariSDK\TypedArrays\InnerLocationsElementsArray $Cities;
    public \CasafariSDK\TypedArrays\InnerLocationsElementsArray $Localities;
}
