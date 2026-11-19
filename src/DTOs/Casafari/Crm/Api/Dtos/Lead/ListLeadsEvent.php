<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsEvent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'EventTypeID' => [
        'format' => 'int32',
    ],
];

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsEvent\AgentsCollection $Agents;
    public string $Description;
    public string $EndDate;
    public string $EventID;
    public string $EventType;
    /**
     * Format: int32
     */
    public int $EventTypeID {
        set {
            $this->assigning('EventTypeID', $value);
            $this->EventTypeID = $value;
        }
    }
    public string $Location;
    public string $StartDate;
    public string $Title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Agents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Agents = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\ListLeadsEvent\AgentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsAgent::class)) : parent::assignMember($name, $value),
            'Description' => is_string($value) ? $this->Description = $value : parent::assignMember($name, $value),
            'EndDate' => is_string($value) ? $this->EndDate = $value : parent::assignMember($name, $value),
            'EventID' => is_string($value) ? $this->EventID = $value : parent::assignMember($name, $value),
            'EventType' => is_string($value) ? $this->EventType = $value : parent::assignMember($name, $value),
            'EventTypeID' => is_int($value) ? $this->EventTypeID = $value : parent::assignMember($name, $value),
            'Location' => is_string($value) ? $this->Location = $value : parent::assignMember($name, $value),
            'StartDate' => is_string($value) ? $this->StartDate = $value : parent::assignMember($name, $value),
            'Title' => is_string($value) ? $this->Title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
