<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\AlertsApi\CrmFeedList\ResponseSchema;

final class FeedsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\AlertsApi\CrmFeedSchema::class;
}
