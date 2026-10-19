<?php

namespace CasafariSDK\DTOs;

/**
 * ListLeadsEvent: typed representation of Casafari.Crm.Api.Dtos.Lead.ListLeadsEvent.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class ListLeadsEvent extends \CasafariSDK\Core\DTO
{
    public string $EventID;
    public string $EventType;
    public int $EventTypeID;
    public string $Title;
    public string $Location;
    public string $Description;
    public string $StartDate;
    public string $EndDate;
    public \CasafariSDK\TypedArrays\ListLeadsAgentsArray $Agents;
}
