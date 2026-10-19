<?php

namespace CasafariSDK;

use Alexanderpas\Common\HTTP\Method;
use CasafariSDK\Core\CasafariCrmApi;
use CasafariSDK\Requests\AgentListRequest;
use CasafariSDK\Responses\AgentListResponse;

/** EntityApi operations from the Casafari CRM API v1 contract. */
final class EntityApi extends CasafariCrmApi
{
    /** getAgents: POST /api/Entity/GetAgents. */
    public function getAgents(AgentListRequest $request): AgentListResponse
    {
        return $this->HttpClient->request(AgentListResponse::class, Method::POST, 'Entity/GetAgents', null, (string)$request);
    }
}
