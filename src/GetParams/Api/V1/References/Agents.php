<?php
declare(strict_types=1);

namespace CasafariSDK\GetParams\Api\V1\References;

final class Agents extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'name' => 'name',
    ],
    'header' => [],
];

    public string $name;
}
