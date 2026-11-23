<?php

declare(strict_types=1);

namespace CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request;

final class FloorsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\Enums\MarketAnalyticsApi\ExternalFloorEnum::class;
}
