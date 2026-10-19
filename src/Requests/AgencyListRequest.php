<?php

namespace CasafariSDK\Requests;

/**
 * AgencyListRequest: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencyListExternalRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencyListRequest extends \CasafariSDK\Core\Request
{
    public \CasafariSDK\Enums\LanguageEnum $Lang;
    public \CasafariSDK\DTOs\AgencySearchFilters $AgencySearchFilters;
    public \CasafariSDK\DTOs\AgencyListSorts $AgencyListSorts;
    public \CasafariSDK\DTOs\AgencyIncludes $Includes;
    public \CasafariSDK\DTOs\PagingRq $PagingRq;
}
