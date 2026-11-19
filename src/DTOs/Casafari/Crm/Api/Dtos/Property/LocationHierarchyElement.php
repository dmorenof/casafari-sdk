<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Location (CASAFARI)
 */
final class LocationHierarchyElement extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
    'level' => [
        'format' => 'int32',
    ],
    'parent_id' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $level {
        set {
            $this->assigning('level', $value);
            $this->level = $value;
        }
    }
    public string $name;
    /**
     * Format: int32
     */
    public int $parent_id {
        set {
            $this->assigning('parent_id', $value);
            $this->parent_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'level' => is_int($value) ? $this->level = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parent_id' => is_int($value) ? $this->parent_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
