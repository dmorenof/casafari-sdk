<?php

namespace CasafariSDK\Requests;

/**
 * CodeTableRequest: typed representation of Casafari.Crm.Api.Dtos.CodeTables.CodeTableRq.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class CodeTableRequest extends \CasafariSDK\Core\Request
{
    public bool $IncludeBusinessTypes;
    public bool $IncludePropertyTypes;
    public int $Lang;
    public bool $IncludeZones;
}
