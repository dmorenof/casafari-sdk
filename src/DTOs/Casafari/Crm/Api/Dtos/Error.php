<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class Error extends \Dmorenof\SdkRuntime\DTO
{
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
