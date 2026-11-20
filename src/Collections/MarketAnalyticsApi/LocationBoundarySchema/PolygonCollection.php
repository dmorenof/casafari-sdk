<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\MarketAnalyticsApi\LocationBoundarySchema;

final class PolygonCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\MarketAnalyticsApi\GeoPoint::class;
}
