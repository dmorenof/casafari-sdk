<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

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
    public int $EventTypeID;
    public string $Location;
    public string $StartDate;
    public string $Title;

}
