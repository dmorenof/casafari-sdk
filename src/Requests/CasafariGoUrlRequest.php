<?php

namespace CasafariSDK\Requests;

/**
 * CasafariGoUrlRequest: typed representation of Casafari.Crm.Api.Dtos.CasafariGo.CasafariGoUrlRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class CasafariGoUrlRequest extends \CasafariSDK\Core\Request
{
    public string $webhookUrl;
    public string $emailAddress;
    public bool $canViewAll;
}
