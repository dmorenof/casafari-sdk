<?php

namespace CasafariSDK\DTOs;

/**
 * ListLeadsProperty: typed representation of Casafari.Crm.Api.Dtos.Lead.ListLeadsProperty.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class ListLeadsProperty extends \CasafariSDK\Core\DTO
{
    public string $PropertyID;
    public string $Reference;
    public string $Address;
    public string $SurfaceArea;
    public string $Price;
    public string $Comission;
    public string $ComissionPercentage;
    public string $LastUpdate;
    public string $GrossArea;
    public string $LandArea;
}
