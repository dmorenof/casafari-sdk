<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyLocaleDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'CultureID' => [
        'format' => 'int32',
    ],
];

    public string $AgencyDescription;
    /**
     * Format: int32
     */
    public int $AgencyID;
    /**
     * Format: int32
     */
    public int $CultureID;

}
