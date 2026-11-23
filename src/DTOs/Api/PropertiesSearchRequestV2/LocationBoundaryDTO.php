<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchRequestV2;

/**
 * Custom location to search within. Can be defined as a polygon of geo-points or a circle with a given target point and a distance. Only one value should be provided.
 */
final class LocationBoundaryDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'polygon' => [
        'minItems' => 4,
    ],
    'polygons' => [
        'maxItems' => 4,
    ],
];

    /**
     * Circle boundary to search within.
     */
    public \CasafariSDK\DTOs\Api\PropertiesSearchRequestV2\CustomLocationBoundary\CircleDTO $circle;
    /**
     * Closed polygon of geo-points to search within. First and last points must match. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `polygons` field instead.</strong>
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\CustomLocationBoundary\PolygonCollection $polygon {
        set {
            $this->assigning('polygon', $value);
            $this->polygon = $value;
        }
    }
    /**
     * List of closed polygons of geo-points to search within. Each polygon must contain at least 4 points. First and last points must match in each polygon. Maximum 4 polygons allowed.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\CustomLocationBoundary\PolygonsArray\PolygonsCollection $polygons {
        set {
            $this->assigning('polygons', $value);
            $this->polygons = $value;
        }
    }

}
