<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyButtons extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public string $backgroundColor;
    public string $foregroundColor;
    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'backgroundColor' => is_string($value) ? $this->backgroundColor = $value : parent::assignMember($name, $value),
            'foregroundColor' => is_string($value) ? $this->foregroundColor = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
