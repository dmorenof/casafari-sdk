<?php

namespace CasafariSDK\Responses;

/**
 * AgentListResponse: typed representation of Casafari.Crm.Api.Dtos.Entity.EntityListRs.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgentListResponse extends \CasafariSDK\Core\Response
{
    public \CasafariSDK\TypedArrays\EntityDtosArray $Entities;
    public int $TotalRecords;
    public \CasafariSDK\DTOs\PagingRs $PagingRs;
}
