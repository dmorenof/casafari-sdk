<?php
declare(strict_types=1);

namespace CasafariSDK\Api\CasafariGo;

final class CreateUser extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/CasafariGo/CreateUser [operationId: CasafariGo_CreateUser] */
    /**
     * Create CasafariGo User
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoEntityRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoEntityRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\CasafariGo\CreateUser::class)->post($payload);
    }

}
