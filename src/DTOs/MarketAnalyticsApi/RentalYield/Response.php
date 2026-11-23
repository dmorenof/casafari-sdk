<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\RentalYield;

/**
 * RentalYieldResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'average_rent_price',
    'properties_count',
    'property_ids',
    'rental_yield',
    'sale_price',
];

    public float $average_rent_price;
    public int $properties_count;
    public \CasafariSDK\Collections\IntegerCollection $property_ids;
    public float $rental_yield;
    public int $sale_price;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'average_rent_price' => is_float($value) ? $this->average_rent_price = $value : parent::assignMember($name, $value),
            'properties_count' => is_int($value) ? $this->properties_count = $value : parent::assignMember($name, $value),
            'property_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->property_ids = new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'rental_yield' => is_float($value) ? $this->rental_yield = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
