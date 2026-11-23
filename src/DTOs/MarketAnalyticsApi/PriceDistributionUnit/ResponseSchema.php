<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\PriceDistributionUnit;

/**
 * PriceDistributionUnitResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'is_mean',
    'lower_bound',
    'properties_count',
    'upper_bound',
];

    /**
     * Indicates whether the mean value is within this distribution unit.
     */
    public bool $is_mean;
    /**
     * The lower price bound of the distribution unit, in euros, inclusive.
     */
    public int $lower_bound;
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
            'is_mean' => is_bool($value) ? $this->is_mean = $value : parent::assignMember($name, $value),
            'lower_bound' => is_int($value) ? $this->lower_bound = $value : parent::assignMember($name, $value),
            'properties_count' => is_int($value) ? $this->properties_count = $value : parent::assignMember($name, $value),
            'upper_bound' => $value === null || is_int($value) ? $this->upper_bound = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
