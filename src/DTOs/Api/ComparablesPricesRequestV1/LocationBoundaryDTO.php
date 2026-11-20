<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\ComparablesPricesRequestV1;

/**
 * Location to search within. Can be defined as a polygon of geo-points or a circle with a given target point and a distance. Only one value should be provided.
 */
final class LocationBoundaryDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'polygon' => [
        'minItems' => 4,
    ],
];

    /**
     * Circle boundary to search within.
     */
    public \CasafariSDK\DTOs\Api\ComparablesPricesRequestV1\LocationBoundary\CircleDTO $circle;
    /**
     * Closed polygon of geo-points to search within. First and last points must match. 
     */
    public \CasafariSDK\Collections\Api\ComparablesPricesRequestV1\LocationBoundary\PolygonCollection $polygon {
        set {
            $this->assigning('polygon', $value);
            $this->polygon = $value;
        }
    }

}
