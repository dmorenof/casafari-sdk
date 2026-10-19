<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Requests\LeadInsertRequest;
use CasafariSDK\Responses\LeadInsertResponse;
use CasafariSDK\Requests\LeadListRequest;
use CasafariSDK\Responses\LeadListResponse;

/** LeadApi operations from the Casafari CRM API v1 contract. */
final class LeadApi extends CasafariCrmApi
{
    /** insertLead: POST /api/Leads/Insert. */
    public function insertLead(LeadInsertRequest $request): LeadInsertResponse
    {
        return $this->HttpClient->request(LeadInsertResponse::class, Method::POST, 'Leads/Insert', null, (string)$request);
    }

    /** listLeads: POST /api/Leads/List. */
    public function listLeads(LeadListRequest $request): LeadListResponse
    {
        return $this->HttpClient->request(LeadListResponse::class, Method::POST, 'Leads/List', null, (string)$request);
    }
}
