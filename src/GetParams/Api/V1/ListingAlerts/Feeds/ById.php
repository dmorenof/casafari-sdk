<?php
declare(strict_types=1);

namespace CasafariSDK\GetParams\Api\V1\ListingAlerts\Feeds;

final class ById extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'alert_date_from' => 'alert_date_from',
        'alert_date_to' => 'alert_date_to',
        'alert_subtype' => 'alert_subtype',
        'created_at_from' => 'created_at_from',
        'created_at_to' => 'created_at_to',
        'created_at_with_photos_from' => 'created_at_with_photos_from',
        'created_at_with_photos_to' => 'created_at_with_photos_to',
        'limit' => 'limit',
        'offset' => 'offset',
        'order_by' => 'order_by',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'alert_date_from' => [
        'format' => 'date',
    ],
    'alert_date_to' => [
        'format' => 'date',
    ],
    'created_at_from' => [
        'format' => 'date-time',
    ],
    'created_at_to' => [
        'format' => 'date-time',
    ],
    'created_at_with_photos_from' => [
        'format' => 'date-time',
    ],
    'created_at_with_photos_to' => [
        'format' => 'date-time',
    ],
];

    public ?string $alert_date_from;
    public ?string $alert_date_to;
    public ?\CasafariSDK\Enums\Api\V1\ListingAlerts\Feeds\ById\Get\Query\AlertSubtypeEnum $alert_subtype;
    public ?string $created_at_from;
    public ?string $created_at_to;
    public ?string $created_at_with_photos_from;
    public ?string $created_at_with_photos_to;
    public ?int $limit;
    public ?int $offset;
    public ?\CasafariSDK\Enums\Api\V1\ListingAlerts\Feeds\ById\Get\Query\OrderByEnum $order_by;
}
