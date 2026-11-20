<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\HeatMapUnit;

/**
 * HeatMapUnitResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'location_id',
    'location_name',
    'value',
];

    public int $location_id;
    public string $location_name;
    public ?float $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'location_id' => is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'location_name' => is_string($value) ? $this->location_name = $value : parent::assignMember($name, $value),
            'value' => $value === null || is_float($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
