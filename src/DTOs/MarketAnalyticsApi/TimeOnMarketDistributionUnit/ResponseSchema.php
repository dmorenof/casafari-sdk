<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\TimeOnMarketDistributionUnit;

/**
 * TimeOnMarketDistributionUnitResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'days_on_market',
    'lower_bound',
    'months_on_market',
    'properties_count',
    'upper_bound',
];

    /**
     * The average days on the market.
     */
    public int $days_on_market;
    /**
     * The lower price bound of the distribution unit, in euros, inclusive.
     */
    public int $lower_bound;
    /**
     * The average months on the market.
     */
    public float $months_on_market;
    /**
     * The number of properties that participated in the distribution.
     */
    public int $properties_count;
    /**
     * The upper price bound of the distribution unit, in euros, exclusive. Null for the top unit, which has no limit.
     */
    public ?int $upper_bound;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'days_on_market' => is_int($value) ? $this->days_on_market = $value : parent::assignMember($name, $value),
            'lower_bound' => is_int($value) ? $this->lower_bound = $value : parent::assignMember($name, $value),
            'months_on_market' => is_float($value) ? $this->months_on_market = $value : parent::assignMember($name, $value),
            'properties_count' => is_int($value) ? $this->properties_count = $value : parent::assignMember($name, $value),
            'upper_bound' => $value === null || is_int($value) ? $this->upper_bound = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
