<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class IdValueModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Id' => [
        'format' => 'int32',
    ],
    'ParentId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $Id;
    /**
     * Format: int32
     */
    public int $ParentId;
    public string $Value;

}
