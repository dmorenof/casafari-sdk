<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * PriceEvolution
 */
final class PriceEvolution extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'avg_price',
    'avg_price_per_sqm',
];

    public \CasafariSDK\DTOs\MarketAnalyticsApi\StatisticsByMonths $avg_price;
    public \CasafariSDK\DTOs\MarketAnalyticsApi\StatisticsByMonths $avg_price_per_sqm;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'avg_price' => $value instanceof \stdClass ? $this->avg_price = new \CasafariSDK\DTOs\MarketAnalyticsApi\StatisticsByMonths($value) : parent::assignMember($name, $value),
            'avg_price_per_sqm' => $value instanceof \stdClass ? $this->avg_price_per_sqm = new \CasafariSDK\DTOs\MarketAnalyticsApi\StatisticsByMonths($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
