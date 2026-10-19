<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Requests\AgencyListRequest;
use CasafariSDK\Responses\AgencyListResponse;

/** AgencyApi operations from the Casafari CRM API v1 contract. */
final class AgencyApi extends CasafariCrmApi
{
    /** getAgencies: POST /api/Agency/GetAgencies. */
    public function getAgencies(AgencyListRequest $request): AgencyListResponse
    {
        return $this->HttpClient->request(AgencyListResponse::class, Method::POST, 'Agency/GetAgencies', null, (string)$request);
    }
}
