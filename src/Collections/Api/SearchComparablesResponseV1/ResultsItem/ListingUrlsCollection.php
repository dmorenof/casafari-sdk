<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\Api\SearchComparablesResponseV1\ResultsItem;

final class ListingUrlsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'string';
    protected const array ITEM_VALIDATION = [
    'format' => 'uri',
];
}
