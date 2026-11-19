<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadFromTo extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'From' => [
        'format' => 'int32',
    ],
    'To' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $From;
    /**
     * Format: int32
     */
    public int $To;

}
