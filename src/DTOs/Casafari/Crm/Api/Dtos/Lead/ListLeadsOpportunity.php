<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsOpportunity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsEvent\AgentsCollection $Agents;
    public string $CreateDate;
    public string $CurrentStatus;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsCustomer $Customer;
    public string $Description;
    public string $EventPriority;
    public string $EventType;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsOpportunity\EventsCollection $Events;
    public string $Id;
    public string $LastUpdate;
    public string $Origin;
    public string $Outcome;
    public string $OutcomeDate;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsOpportunity\PropertiesCollection $Properties;
    public string $SalePrice;
    public string $Title;

}
