<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * LocationBoundarySchema
 */
final class LocationBoundarySchema extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'location_ids' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
    'polygon' => [
        'minItems' => 4,
    ],
];

    /**
     * Circle boundary to search within.
     */
    public \CasafariSDK\DTOs\MarketAnalyticsApi\CircleBoundarySchema $circle;
    /**
     * List of location IDs.
     */
    public \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\LocationIdsCollection $location_ids {
        set {
            $this->assigning('location_ids', $value);
            $this->location_ids = $value;
        }
    }
    /**
     * List of geo-points to search within. Polygon must contain at least 4 points. First and last points must match.
     */
    public \CasafariSDK\Collections\MarketAnalyticsApi\LocationBoundarySchema\PolygonCollection $polygon {
        set {
            $this->assigning('polygon', $value);
            $this->polygon = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'circle' => $value instanceof \stdClass ? $this->circle = new \CasafariSDK\DTOs\MarketAnalyticsApi\CircleBoundarySchema($value) : parent::assignMember($name, $value),
            'location_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->location_ids = new \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\LocationIdsCollection($value) : parent::assignMember($name, $value),
            'polygon' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->polygon = new \CasafariSDK\Collections\MarketAnalyticsApi\LocationBoundarySchema\PolygonCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
