<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchComparablesResponseV2;

/**
 * Statistics information for the found comparables (for `operation` defined in the request).
 */
final class StatisticsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'average_listings_per_property',
    'average_price',
    'average_price_per_sqm',
    'average_time_on_the_market',
    'sold_or_rented_in_last_six_months',
];

    /**
     * Average number of listings per property.
     */
    public float $average_listings_per_property;
    /**
     * Average price.
     */
    public int $average_price;
    /**
     * Average price per square meter.
     */
    public float $average_price_per_sqm;
    /**
     * Average number of days on the market.
     */
    public int $average_time_on_the_market;
    /**
     * Number of properties that were sold or rented during the last 6 months in the requested location.
     */
    public int $sold_or_rented_in_last_six_months;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'average_listings_per_property' => is_float($value) ? $this->average_listings_per_property = $value : parent::assignMember($name, $value),
            'average_price' => is_int($value) ? $this->average_price = $value : parent::assignMember($name, $value),
            'average_price_per_sqm' => is_float($value) ? $this->average_price_per_sqm = $value : parent::assignMember($name, $value),
            'average_time_on_the_market' => is_int($value) ? $this->average_time_on_the_market = $value : parent::assignMember($name, $value),
            'sold_or_rented_in_last_six_months' => is_int($value) ? $this->sold_or_rented_in_last_six_months = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
