<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\RentalYield;

/**
 * RentalYieldRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'bedrooms',
    'condition_type',
    'construction_year',
    'coordinates',
    'country_id',
    'distance',
    'rooms',
    'sale_price',
    'total_area',
    'type_group',
    'type_id',
];

    protected const array VALIDATION = [
    'bedrooms' => [
        'minimum' => -1.0,
    ],
    'distance' => [
        'minimum' => 0.05,
        'maximum' => 5.0,
    ],
    'rooms' => [
        'minimum' => 0.0,
    ],
    'sale_price' => [
        'minimum' => 1.0,
    ],
    'total_area' => [
        'minimum' => 1.0,
    ],
];

    public int $bedrooms {
        set {
            $this->assigning('bedrooms', $value);
            $this->bedrooms = $value;
        }
    }
    public \CasafariSDK\Enums\MarketAnalyticsApi\InternalConditionEnum $condition_type;
    public int $construction_year;
    public \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint $coordinates;
    public int $country_id;
    public float $distance {
        set {
            $this->assigning('distance', $value);
            $this->distance = $value;
        }
    }
    public ?int $property_id_to_exclude;
    public int $rooms {
        set {
            $this->assigning('rooms', $value);
            $this->rooms = $value;
        }
    }
    public int $sale_price {
        set {
            $this->assigning('sale_price', $value);
            $this->sale_price = $value;
        }
    }
    public int $total_area {
        set {
            $this->assigning('total_area', $value);
            $this->total_area = $value;
        }
    }
    public \CasafariSDK\Enums\MarketAnalyticsApi\EstateTypeGroupEnum $type_group;
    public \CasafariSDK\Enums\MarketAnalyticsApi\InternalEstateTypeEnum $type_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bedrooms' => is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'condition_type' => is_string($value) ? $this->condition_type = \CasafariSDK\Enums\MarketAnalyticsApi\InternalConditionEnum::from($value) : parent::assignMember($name, $value),
            'construction_year' => is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'coordinates' => $value instanceof \stdClass ? $this->coordinates = new \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint($value) : parent::assignMember($name, $value),
            'country_id' => is_int($value) ? $this->country_id = $value : parent::assignMember($name, $value),
            'distance' => is_float($value) ? $this->distance = $value : parent::assignMember($name, $value),
            'property_id_to_exclude' => $value === null || is_int($value) ? $this->property_id_to_exclude = $value : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            'total_area' => is_int($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'type_group' => is_string($value) ? $this->type_group = \CasafariSDK\Enums\MarketAnalyticsApi\EstateTypeGroupEnum::from($value) : parent::assignMember($name, $value),
            'type_id' => is_int($value) ? $this->type_id = \CasafariSDK\Enums\MarketAnalyticsApi\InternalEstateTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
