<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * PriceStatistics
 */
final class PriceStatistics extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'average_price',
    'average_price_per_sqm',
];

    public int $average_price;
    public int $average_price_per_sqm;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'average_price' => is_int($value) ? $this->average_price = $value : parent::assignMember($name, $value),
            'average_price_per_sqm' => is_int($value) ? $this->average_price_per_sqm = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
