<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Photos
 */
final class PropertyPhotos extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'SortOrder' => [
        'format' => 'int32',
    ],
];

    public string $Category;
    public string $Description;
    /**
     * Format: int32
     */
    public int $SortOrder {
        set {
            $this->assigning('SortOrder', $value);
            $this->SortOrder = $value;
        }
    }
    public string $Url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Category' => is_string($value) ? $this->Category = $value : parent::assignMember($name, $value),
            'Description' => is_string($value) ? $this->Description = $value : parent::assignMember($name, $value),
            'SortOrder' => is_int($value) ? $this->SortOrder = $value : parent::assignMember($name, $value),
            'Url' => is_string($value) ? $this->Url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
