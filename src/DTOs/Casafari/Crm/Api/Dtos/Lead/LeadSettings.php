<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'AssignToCustomerOriginId' => [
        'format' => 'int32',
    ],
    'AssignToPropertyId' => [
        'format' => 'int32',
    ],
    'AssignToStatusId' => [
        'format' => 'int32',
    ],
];

    public bool $AssignToAgentCurrentlyAssignedToCustomer;
    public bool $AssignToAgentCurrentlyAssignedToProperty;
    /**
     * Format: int32
     */
    public int $AssignToCustomerOriginId;
    /**
     * Format: int32
     */
    public int $AssignToPropertyId;
    /**
     * Format: int32
     */
    public int $AssignToStatusId;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ForceAgent $ForceAgent;
    public bool $IncludeMailing;
    public bool $IncludeOptIn;
    public string $LeadTitle;

}
