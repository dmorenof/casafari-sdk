<?php

declare(strict_types=1);

namespace CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\CustomLocationsArray;

final class CustomLocationsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\CustomLocationsCollection::class;
    protected const array ITEM_VALIDATION = [
    'minItems' => 4,
    'maxItems' => 25,
];
}
