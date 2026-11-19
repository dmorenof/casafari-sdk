<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class PagingRs extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'CurrentPage' => [
        'format' => 'int32',
    ],
    'NextPage' => [
        'format' => 'int32',
    ],
    'PreviousPage' => [
        'format' => 'int32',
    ],
    'ResultsPerPage' => [
        'format' => 'int32',
    ],
    'TotalPages' => [
        'format' => 'int32',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'PagingItems',
];

    /**
     * Format: int32
     */
    public int $CurrentPage;
    /**
     * Format: int32
     */
    public int $NextPage;
    public \CasafariSDK\Collections\StringCollection $PagingItems;
    /**
     * Format: int32
     */
    public int $PreviousPage;
    /**
     * Format: int32
     */
    public int $ResultsPerPage;
    /**
     * Format: int32
     */
    public int $TotalPages;

}
