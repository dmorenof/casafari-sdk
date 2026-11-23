<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * PropertiesDistributionUnit
 */
final class PropertiesDistributionUnit extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'coordinates',
    'location_id',
    'price',
    'price_per_sqm',
    'property_id',
    'property_unit_id',
];

    public \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint $coordinates;
    public int $location_id;
    public int $price;
    public float $price_per_sqm;
    /**
     * ID of the property.
     */
    public int $property_id;
    /**
     * Property sub-identifier. Along with the property_id, it ensures the uniqueness of the property.
     */
    public int $property_unit_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'coordinates' => $value instanceof \stdClass ? $this->coordinates = new \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint($value) : parent::assignMember($name, $value),
            'location_id' => is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'price' => is_int($value) ? $this->price = $value : parent::assignMember($name, $value),
            'price_per_sqm' => is_float($value) ? $this->price_per_sqm = $value : parent::assignMember($name, $value),
            'property_id' => is_int($value) ? $this->property_id = $value : parent::assignMember($name, $value),
            'property_unit_id' => is_int($value) ? $this->property_unit_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
