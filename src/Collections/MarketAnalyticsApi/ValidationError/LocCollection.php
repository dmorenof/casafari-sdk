<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\MarketAnalyticsApi\ValidationError;

final class LocCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\MarketAnalyticsApi\ValidationError\LocDTO::class;
}
