<?php

namespace CasafariSDK\DTOs;

/**
 * ListLeadsOpportunity: typed representation of Casafari.Crm.Api.Dtos.Lead.ListLeadsOpportunity.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class ListLeadsOpportunity extends \CasafariSDK\Core\DTO
{
    public string $Id;
    public string $Title;
    public string $CurrentStatus;
    public string $CreateDate;
    public string $LastUpdate;
    public string $Origin;
    public string $Description;
    public string $Outcome;
    public string $OutcomeDate;
    public string $EventPriority;
    public string $EventType;
    public string $SalePrice;
    public \CasafariSDK\TypedArrays\ListLeadsAgentsArray $Agents;
    public \CasafariSDK\TypedArrays\ListLeadsPropertiesArray $Properties;
    public \CasafariSDK\DTOs\ListLeadsCustomer $Customer;
    public \CasafariSDK\TypedArrays\ListLeadsEventsArray $Events;
}
