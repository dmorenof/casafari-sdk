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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AssignToAgentCurrentlyAssignedToCustomer' => is_bool($value) ? $this->AssignToAgentCurrentlyAssignedToCustomer = $value : parent::assignMember($name, $value),
            'AssignToAgentCurrentlyAssignedToProperty' => is_bool($value) ? $this->AssignToAgentCurrentlyAssignedToProperty = $value : parent::assignMember($name, $value),
            'AssignToCustomerOriginId' => is_int($value) ? $this->AssignToCustomerOriginId = $value : parent::assignMember($name, $value),
            'AssignToPropertyId' => is_int($value) ? $this->AssignToPropertyId = $value : parent::assignMember($name, $value),
            'AssignToStatusId' => is_int($value) ? $this->AssignToStatusId = $value : parent::assignMember($name, $value),
            'ForceAgent' => $value instanceof \stdClass ? $this->ForceAgent = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ForceAgent($value) : parent::assignMember($name, $value),
            'IncludeMailing' => is_bool($value) ? $this->IncludeMailing = $value : parent::assignMember($name, $value),
            'IncludeOptIn' => is_bool($value) ? $this->IncludeOptIn = $value : parent::assignMember($name, $value),
            'LeadTitle' => is_string($value) ? $this->LeadTitle = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
