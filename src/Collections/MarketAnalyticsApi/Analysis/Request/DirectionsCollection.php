<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request;

final class DirectionsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\Enums\MarketAnalyticsApi\ExternalDirectionEnum::class;
}
