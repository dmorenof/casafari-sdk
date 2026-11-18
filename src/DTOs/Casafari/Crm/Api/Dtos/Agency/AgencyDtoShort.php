<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyDtoShort extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'ParentID' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $AgencyID;
    public string $AgencyName;
    public string $LogoPath;
    /**
     * Format: int32
     */
    public int $ParentID;

}
