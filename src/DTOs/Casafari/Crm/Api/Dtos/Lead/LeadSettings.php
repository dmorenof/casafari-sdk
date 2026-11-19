<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadSettings extends \Dmorenof\SdkRuntime\DTO
{
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
    public int $AssignToCustomerOriginId {
        set {
            $this->assigning('AssignToCustomerOriginId', $value);
            $this->AssignToCustomerOriginId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $AssignToPropertyId {
        set {
            $this->assigning('AssignToPropertyId', $value);
            $this->AssignToPropertyId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $AssignToStatusId {
        set {
            $this->assigning('AssignToStatusId', $value);
            $this->AssignToStatusId = $value;
        }
    }
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ForceAgent $ForceAgent;
    public bool $IncludeMailing;
    public bool $IncludeOptIn;
    public string $LeadTitle;

}
