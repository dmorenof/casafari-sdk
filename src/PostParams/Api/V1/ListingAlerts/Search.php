<?php
declare(strict_types=1);

namespace CasafariSDK\PostParams\Api\V1\ListingAlerts;

final class Search extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'alert_subtype' => 'alert_subtype',
        'limit' => 'limit',
        'offset' => 'offset',
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

    public ?\CasafariSDK\Enums\Api\V1\ListingAlerts\Search\Post\Query\AlertSubtypeEnum $alert_subtype;
    public ?int $limit;
    public ?int $offset;
    public ?\CasafariSDK\Enums\Api\V1\ListingAlerts\Search\Post\Query\OrderByEnum $order_by;
    public ?\CasafariSDK\DTOs\Api\AlertsSearchFilterV1 $body;
}
