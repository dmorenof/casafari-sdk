<?php
declare(strict_types=1);

namespace CasafariSDK\GetParams\Api\V1\References;

final class Sources extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'locationId',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'locationId' => 'locationId',
    ],
    'header' => [],
];

    public int $locationId;
}
