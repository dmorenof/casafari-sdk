<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\BedroomsDistributionUnit;

/**
 * BedroomsDistributionUnitResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'average_price',
    'average_price_per_sqm',
    'bedrooms',
    'properties_count',
];

    /**
     * Average price of properties with a specific number of bedrooms.
     */
    public float $average_price;
    /**
     * Average price per square meter of properties with a specific number of bedrooms.
     */
    public float $average_price_per_sqm;
    /**
     * The number of bedrooms in the properties that participated in the distribution.
     */
    public string $bedrooms;
    /**
     * The number of properties that participated in the distribution.
     */
    public int $properties_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'average_price' => is_float($value) ? $this->average_price = $value : parent::assignMember($name, $value),
            'average_price_per_sqm' => is_float($value) ? $this->average_price_per_sqm = $value : parent::assignMember($name, $value),
            'bedrooms' => is_string($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'properties_count' => is_int($value) ? $this->properties_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
