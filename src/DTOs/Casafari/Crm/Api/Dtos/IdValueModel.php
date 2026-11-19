<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class IdValueModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Id' => [
        'format' => 'int32',
    ],
    'ParentId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $Id {
        set {
            $this->assigning('Id', $value);
            $this->Id = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $ParentId {
        set {
            $this->assigning('ParentId', $value);
            $this->ParentId = $value;
        }
    }
    public string $Value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Id' => is_int($value) ? $this->Id = $value : parent::assignMember($name, $value),
            'ParentId' => is_int($value) ? $this->ParentId = $value : parent::assignMember($name, $value),
            'Value' => is_string($value) ? $this->Value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
