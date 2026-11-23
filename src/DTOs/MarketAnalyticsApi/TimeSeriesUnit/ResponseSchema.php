<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\TimeSeriesUnit;

/**
 * TimeSeriesUnitResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'date_start',
    'value',
];

    /**
     * The starting date of the period associated with the passed `date_interval` field value. The format follows `YYYY-MM-DD`.
     * Format: date
     */
    public string $date_start;
    /**
     * The numerical value corresponding to the passed `data_point` field value for the given `date_start`.
     */
    public ?float $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date_start' => is_string($value) ? $this->date_start = $value : parent::assignMember($name, $value),
            'value' => $value === null || is_float($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
