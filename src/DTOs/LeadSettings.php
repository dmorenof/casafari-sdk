<?php

namespace CasafariSDK\DTOs;

/**
 * LeadSettings: typed representation of Casafari.Crm.Api.Dtos.Lead.LeadSettings.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class LeadSettings extends \CasafariSDK\Core\DTO
{
    public string $LeadTitle;
    public int $AssignToPropertyId;
    public int $AssignToStatusId;
    public int $AssignToCustomerOriginId;
    public bool $AssignToAgentCurrentlyAssignedToProperty;
    public bool $AssignToAgentCurrentlyAssignedToCustomer;
    public \CasafariSDK\DTOs\ForceAgent $ForceAgent;
    public bool $IncludeMailing;
    public bool $IncludeOptIn;
}
