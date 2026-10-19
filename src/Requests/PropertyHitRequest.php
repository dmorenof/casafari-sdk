<?php

namespace CasafariSDK\Requests;

/**
 * PropertyHitRequest: typed representation of Casafari.Crm.Api.Dtos.Property.HitRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class PropertyHitRequest extends \CasafariSDK\Core\Request
{
    public string $Ip;
    public int $PropertyId;
}
