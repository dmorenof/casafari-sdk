<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * PropertiesDistributionQuartiles
 */
final class PropertiesDistributionQuartiles extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'lower',
    'mean',
    'upper',
];

    /**
     * 25th percentile. The lowest 25% of distribution data is below this point.
     */
    public float $lower;
    /**
     * 50th percentile or median. The lowest 50% of distribution data is below this point.
     */
    public float $mean;
    /**
     * 75th percentile. The lowest 75% of distribution data is below this point.
     */
    public float $upper;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lower' => is_float($value) ? $this->lower = $value : parent::assignMember($name, $value),
            'mean' => is_float($value) ? $this->mean = $value : parent::assignMember($name, $value),
            'upper' => is_float($value) ? $this->upper = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
