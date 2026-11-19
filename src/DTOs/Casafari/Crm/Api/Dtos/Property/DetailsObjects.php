<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class DetailsObjects extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'CategoryId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $CategoryId {
        set {
            $this->assigning('CategoryId', $value);
            $this->CategoryId = $value;
        }
    }
    public string $CategoryInnerText;
    public \CasafariSDK\Collections\StringCollection $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CategoryId' => is_int($value) ? $this->CategoryId = $value : parent::assignMember($name, $value),
            'CategoryInnerText' => is_string($value) ? $this->CategoryInnerText = $value : parent::assignMember($name, $value),
            'Name' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->Name = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
