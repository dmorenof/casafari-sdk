<?php
declare(strict_types=1);

namespace CasafariSDK\PostParams\Api\V2\Properties;

final class Search extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'cursor' => 'cursor',
        'limit' => 'limit',
        'order' => 'order',
        'order_by' => 'order_by',
        'pagination_state_id' => 'pagination_state_id',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    protected const array VALIDATION = [
    'limit' => [
        'maximum' => 100.0,
    ],
    'pagination_state_id' => [
        'format' => 'uuid',
    ],
];

    public ?string $cursor;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    public ?\CasafariSDK\Enums\Api\V2\Properties\Search\Post\Query\QueryOrderEnum $order;
    public ?\CasafariSDK\Enums\Api\V2\Properties\Search\Post\Query\OrderByEnum $order_by;
    public ?string $pagination_state_id {
        set {
            $this->assigning('pagination_state_id', $value);
            $this->pagination_state_id = $value;
        }
    }
    public ?\CasafariSDK\DTOs\Api\PropertiesSearchRequestV2 $body;
}
