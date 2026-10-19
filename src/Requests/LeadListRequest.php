<?php

namespace CasafariSDK\Requests;

/**
 * LeadListRequest: typed representation of Casafari.Crm.Api.Dtos.Lead.GetLeadRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LeadListRequest extends \CasafariSDK\Core\Request
{
    public \CasafariSDK\Enums\LanguageEnum $Language;
    public string $StartDate;
    public string $EndDate;
    public \CasafariSDK\Enums\LeadListRequestCategoryEnum $Category;
}
