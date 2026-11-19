<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Files
 */
final class PropertyFiles extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'SortOrder' => [
        'format' => 'int32',
    ],
];

    public string $Category;
    public string $Filename;
    /**
     * Format: int32
     */
    public int $SortOrder {
        set {
            $this->assigning('SortOrder', $value);
            $this->SortOrder = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Category' => is_string($value) ? $this->Category = $value : parent::assignMember($name, $value),
            'Filename' => is_string($value) ? $this->Filename = $value : parent::assignMember($name, $value),
            'SortOrder' => is_int($value) ? $this->SortOrder = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
