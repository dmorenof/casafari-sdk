<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class PagingRq extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Current' => [
        'format' => 'int32',
    ],
    'ResultsPerPage' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $Current;
    /**
     * Format: int32
     */
    public int $ResultsPerPage;

}
