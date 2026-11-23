<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchComparablesResponseV2;

/**
 * Estimated prices calculated based on the found comparables (for `operation` defined in the request).
 */
final class EstimatedPricesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'fair_market_price',
    'fair_market_price_per_sqm',
    'fast_sell_price',
    'fast_sell_price_per_sqm',
    'out_of_market_price',
    'out_of_market_price_per_sqm',
];

    /**
     * Fair market price.
     */
    public int $fair_market_price;
    /**
     * Fair market price per square meter.
     */
    public float $fair_market_price_per_sqm;
    /**
     * Fast sell price.
     */
    public int $fast_sell_price;
    /**
     * Fast sell price per square meter.
     */
    public float $fast_sell_price_per_sqm;
    /**
     * Out of market price.
     */
    public int $out_of_market_price;
    /**
     * Out of market price per square meter.
     */
    public float $out_of_market_price_per_sqm;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fair_market_price' => is_int($value) ? $this->fair_market_price = $value : parent::assignMember($name, $value),
            'fair_market_price_per_sqm' => is_float($value) ? $this->fair_market_price_per_sqm = $value : parent::assignMember($name, $value),
            'fast_sell_price' => is_int($value) ? $this->fast_sell_price = $value : parent::assignMember($name, $value),
            'fast_sell_price_per_sqm' => is_float($value) ? $this->fast_sell_price_per_sqm = $value : parent::assignMember($name, $value),
            'out_of_market_price' => is_int($value) ? $this->out_of_market_price = $value : parent::assignMember($name, $value),
            'out_of_market_price_per_sqm' => is_float($value) ? $this->out_of_market_price_per_sqm = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
