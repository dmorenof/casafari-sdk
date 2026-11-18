<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\User;

final class UserPortalDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'MaxProperties' => [
        'format' => 'int32',
    ],
    'PortalID' => [
        'format' => 'int32',
    ],
    'UserID' => [
        'format' => 'int32',
    ],
];

    public bool $ManagerOnly;
    /**
     * Format: int32
     */
    public int $MaxProperties;
    /**
     * Format: int32
     */
    public int $PortalID;
    public string $PortalLogo;
    /**
     * Format: int32
     */
    public int $UserID;

}
