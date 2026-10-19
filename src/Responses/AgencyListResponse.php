<?php

namespace CasafariSDK\Responses;

/**
 * AgencyListResponse: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencyListRs.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencyListResponse extends \CasafariSDK\Core\Response
{
    public \CasafariSDK\TypedArrays\AgencyDtosArray $Agencies;
    public \CasafariSDK\DTOs\LocationsLookups $LocationsLookups;
    public int $TotalRecords;
    public \CasafariSDK\DTOs\PagingRs $PagingRs;
}
