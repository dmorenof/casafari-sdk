<?php

declare(strict_types=1);

namespace CasafariSDK\Collections\MarketAnalyticsApi\TimeSeries\Post;

final class MarketAnalyticsApiTimeSeriesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\MarketAnalyticsApi\TimeSeriesUnit\ResponseSchema::class;
}
