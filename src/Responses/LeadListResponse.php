<?php

namespace CasafariSDK\Responses;

/**
 * LeadListResponse: typed representation of Casafari.Crm.Api.Dtos.Lead.ListLeadsRs.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LeadListResponse extends \CasafariSDK\Core\Response
{
    public \CasafariSDK\TypedArrays\ListLeadsOpportunitiesArray $Opportunities;
}
