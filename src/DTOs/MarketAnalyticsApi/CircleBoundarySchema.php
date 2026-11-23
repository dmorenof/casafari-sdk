<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * CircleBoundarySchema
 */
final class CircleBoundarySchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'distance',
    'target_point',
];

    protected const array VALIDATION = [
    'distance' => [
        'minimum' => 50.0,
        'maximum' => 50000.0,
    ],
];

    /**
     * Maximum distance in meters from the requested `target_point` to the properties.
     */
    public int $distance {
        set {
            $this->assigning('distance', $value);
            $this->distance = $value;
        }
    }
    /**
     * Target point coordinates to search around.
     */
    public \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint $target_point;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'distance' => is_int($value) ? $this->distance = $value : parent::assignMember($name, $value),
            'target_point' => $value instanceof \stdClass ? $this->target_point = new \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
