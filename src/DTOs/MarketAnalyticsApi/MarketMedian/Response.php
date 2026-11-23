<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\MarketMedian;

/**
 * MarketMedianResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'price_per_sqm_median',
    'properties_count',
];

    public float $price_per_sqm_median;
    public int $properties_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price_per_sqm_median' => is_float($value) ? $this->price_per_sqm_median = $value : parent::assignMember($name, $value),
            'properties_count' => is_int($value) ? $this->properties_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
