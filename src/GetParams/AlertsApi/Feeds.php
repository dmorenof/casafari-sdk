<?php

declare(strict_types=1);

namespace CasafariSDK\GetParams\AlertsApi;

final class Feeds extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'cursor' => 'cursor',
        'limit' => 'limit',
    ],
    'header' => [],
];

    protected const array VALIDATION = [
    'limit' => [
        'minimum' => 1.0,
        'maximum' => 100.0,
    ],
];

    public ?string $cursor;
    public ?int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
}
