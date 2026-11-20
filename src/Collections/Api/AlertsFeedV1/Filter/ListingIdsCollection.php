<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\Api\AlertsFeedV1\Filter;

final class ListingIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'integer';
    protected const array ITEM_VALIDATION = [
    'minimum' => 1.0,
];
}
