<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyFrom extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Date' => [
        'format' => 'date-time',
    ],
];

    /**
     * Format: date-time
     */
    public string $Date {
        set {
            $this->assigning('Date', $value);
            $this->Date = $value;
        }
    }
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\PropertyFrom\TypeEnum $Type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Date' => is_string($value) ? $this->Date = $value : parent::assignMember($name, $value),
            'Type' => is_string($value) ? $this->Type = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\PropertyFrom\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
