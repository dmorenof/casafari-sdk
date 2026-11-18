<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyPhotoDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'AgencyPhotoID' => [
        'format' => 'int32',
    ],
    'Sortorder' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $AgencyID;
    /**
     * Format: int32
     */
    public int $AgencyPhotoID;
    public string $Path;
    /**
     * Format: int32
     */
    public int $Sortorder;

}
