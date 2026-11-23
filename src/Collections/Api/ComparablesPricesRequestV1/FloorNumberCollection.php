<?php

declare(strict_types=1);

namespace CasafariSDK\Collections\Api\ComparablesPricesRequestV1;

final class FloorNumberCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'integer';
    protected const array ITEM_VALIDATION = [
    'minimum' => -250.0,
    'maximum' => 250.0,
];
}
