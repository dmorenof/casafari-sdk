<?php

namespace CasafariSDK\DTOs;

/**
 * PagingRs: typed representation of Casafari.Crm.Api.Dtos.PagingRs.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class PagingRs extends \CasafariSDK\Core\DTO
{
    public int $NextPage;
    public int $PreviousPage;
    public int $TotalPages;
    public int $CurrentPage;
    public int $ResultsPerPage;
    public \CasafariSDK\TypedArrays\StringsArray $PagingItems;
}
