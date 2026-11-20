<?php
declare(strict_types=1);

namespace CasafariSDK\GetParams\Api\V1\Properties\Search;

final class ByPropertyId extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'limit' => 'limit',
        'offset' => 'offset',
    ],
    'header' => [],
];

    public ?int $limit;
    public ?int $offset;
}
