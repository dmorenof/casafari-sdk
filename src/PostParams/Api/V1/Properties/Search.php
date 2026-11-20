<?php
declare(strict_types=1);

namespace CasafariSDK\PostParams\Api\V1\Properties;

final class Search extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'limit' => 'limit',
        'offset' => 'offset',
        'order' => 'order',
        'order_by' => 'order_by',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'limit' => [
        'maximum' => 100.0,
    ],
    'offset' => [
        'maximum' => 50000.0,
    ],
];

    public ?int $limit;
    public ?int $offset;
    public ?\CasafariSDK\Enums\Api\V1\Properties\Search\Post\Query\QueryOrderEnum $order;
    public ?\CasafariSDK\Enums\Api\V1\Properties\Search\Post\Query\OrderByEnum $order_by;
    public ?\CasafariSDK\DTOs\Api\PropertiesSearchRequestV1 $body;
}
