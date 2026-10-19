<?php

namespace CasafariSDK\DTOs;

/**
 * PagingRq: typed representation of Casafari.Crm.Api.Dtos.PagingRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class PagingRq extends \CasafariSDK\Core\DTO
{
    public int $Current;
    public int $ResultsPerPage;
}
