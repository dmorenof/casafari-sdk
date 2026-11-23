<?php
declare(strict_types=1);

namespace CasafariSDK\GetParams\Api\V1\ListingAlerts;

final class Feeds extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'filter' => 'filter',
        'only_self' => 'only_self',
    ],
    'header' => [],
];

    public ?bool $filter;
    public ?bool $only_self;
}
