<?php

namespace CasafariSDK\Requests;

/**
 * LeadInsertRequest: typed representation of Casafari.Crm.Api.Dtos.Lead.LeadRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LeadInsertRequest extends \CasafariSDK\Core\Request
{
    public \CasafariSDK\DTOs\LeadSettings $Settings;
    public \CasafariSDK\DTOs\LeadEntity $Contact;
}
