<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsOpportunity extends \Dmorenof\SdkRuntime\DTO
{
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Agents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Agents = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsEvent\AgentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsAgent::class)) : parent::assignMember($name, $value),
            'CreateDate' => is_string($value) ? $this->CreateDate = $value : parent::assignMember($name, $value),
            'CurrentStatus' => is_string($value) ? $this->CurrentStatus = $value : parent::assignMember($name, $value),
            'Customer' => $value instanceof \stdClass ? $this->Customer = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsCustomer($value) : parent::assignMember($name, $value),
            'Description' => is_string($value) ? $this->Description = $value : parent::assignMember($name, $value),
            'EventPriority' => is_string($value) ? $this->EventPriority = $value : parent::assignMember($name, $value),
            'EventType' => is_string($value) ? $this->EventType = $value : parent::assignMember($name, $value),
            'Events' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Events = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsOpportunity\EventsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsEvent::class)) : parent::assignMember($name, $value),
            'Id' => is_string($value) ? $this->Id = $value : parent::assignMember($name, $value),
            'LastUpdate' => is_string($value) ? $this->LastUpdate = $value : parent::assignMember($name, $value),
            'Origin' => is_string($value) ? $this->Origin = $value : parent::assignMember($name, $value),
            'Outcome' => is_string($value) ? $this->Outcome = $value : parent::assignMember($name, $value),
            'OutcomeDate' => is_string($value) ? $this->OutcomeDate = $value : parent::assignMember($name, $value),
            'Properties' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Properties = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsOpportunity\PropertiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsProperty::class)) : parent::assignMember($name, $value),
            'SalePrice' => is_string($value) ? $this->SalePrice = $value : parent::assignMember($name, $value),
            'Title' => is_string($value) ? $this->Title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
