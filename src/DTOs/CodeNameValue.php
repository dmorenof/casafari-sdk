<?php

namespace CasafariSDK\DTOs;

/**
 * CodeNameValue: typed representation of Casafari.Crm.Api.Dtos.CodeTables.CodeNameValue.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class CodeNameValue extends \CasafariSDK\Core\DTO
{
    public int $Id;
    public string $Name;
    public string $Zone;
    public string $City;
    public int $CultureId;
}
