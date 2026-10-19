<?php

namespace CasafariSDK\Requests;

/**
 * AgentListRequest: typed representation of Casafari.Crm.Api.Dtos.Entity.SystemUserRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgentListRequest extends \CasafariSDK\Core\Request
{
    public \CasafariSDK\Enums\LanguageEnum $Lang;
    public \CasafariSDK\DTOs\SystemUserEntitySearchFilters $EntitySearchFilters;
    public \CasafariSDK\DTOs\EntityListSorts $EntityListSorts;
    public \CasafariSDK\DTOs\EntitySearchIncludes $Includes;
    public \CasafariSDK\DTOs\PagingRq $PagingRq;
}
