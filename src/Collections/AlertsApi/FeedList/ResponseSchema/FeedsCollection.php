<?php

declare(strict_types=1);

namespace CasafariSDK\Collections\AlertsApi\FeedList\ResponseSchema;

final class FeedsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\AlertsApi\FeedSummarySchema::class;
}
