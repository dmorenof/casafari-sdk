<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * PriceEstimation
 */
final class PriceEstimation extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fast_market_price',
    'out_of_market_price',
];

    public int $fast_market_price;
    public int $out_of_market_price;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fast_market_price' => is_int($value) ? $this->fast_market_price = $value : parent::assignMember($name, $value),
            'out_of_market_price' => is_int($value) ? $this->out_of_market_price = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
