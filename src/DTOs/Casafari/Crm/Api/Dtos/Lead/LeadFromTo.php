<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadFromTo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'From' => [
        'format' => 'int32',
    ],
    'To' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $From {
        set {
            $this->assigning('From', $value);
            $this->From = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $To {
        set {
            $this->assigning('To', $value);
            $this->To = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'From' => is_int($value) ? $this->From = $value : parent::assignMember($name, $value),
            'To' => is_int($value) ? $this->To = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
