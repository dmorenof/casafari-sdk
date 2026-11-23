<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\Analysis;

/**
 * AnalysisResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'average_days_on_the_market',
    'price_estimation',
    'price_evolution',
    'price_statistics',
    'summary_price_evolution',
];

    /**
     * Indicates the average number of days properties remain listed on the market before being sold or removed.
     */
    public int $average_days_on_the_market;
    /**
     * Provides estimated prices, including a quick sale price `fast_market_price` and an inflated price `out_of_market_price`.
     */
    public \CasafariSDK\DTOs\MarketAnalyticsApi\PriceEstimation $price_estimation;
    /**
     * Represents time series data showing how average prices and prices per square meter have changed over time for inactive properties.
     */
    public \CasafariSDK\DTOs\MarketAnalyticsApi\PriceEvolution $price_evolution;
    /**
     * Statistics including the average price and average price per square meter for properties matching the requested filters.
     */
    public \CasafariSDK\DTOs\MarketAnalyticsApi\PriceStatistics $price_statistics;
    /**
     * Represents time series data showing how average prices and prices per square meter have changed over time for both active and inactive properties.
     */
    public \CasafariSDK\DTOs\MarketAnalyticsApi\PriceEvolution $summary_price_evolution;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'average_days_on_the_market' => is_int($value) ? $this->average_days_on_the_market = $value : parent::assignMember($name, $value),
            'price_estimation' => $value instanceof \stdClass ? $this->price_estimation = new \CasafariSDK\DTOs\MarketAnalyticsApi\PriceEstimation($value) : parent::assignMember($name, $value),
            'price_evolution' => $value instanceof \stdClass ? $this->price_evolution = new \CasafariSDK\DTOs\MarketAnalyticsApi\PriceEvolution($value) : parent::assignMember($name, $value),
            'price_statistics' => $value instanceof \stdClass ? $this->price_statistics = new \CasafariSDK\DTOs\MarketAnalyticsApi\PriceStatistics($value) : parent::assignMember($name, $value),
            'summary_price_evolution' => $value instanceof \stdClass ? $this->summary_price_evolution = new \CasafariSDK\DTOs\MarketAnalyticsApi\PriceEvolution($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
