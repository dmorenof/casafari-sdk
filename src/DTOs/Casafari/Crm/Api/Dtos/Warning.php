<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class Warning extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'Code' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $Code;
    public string $ShortText;

}
