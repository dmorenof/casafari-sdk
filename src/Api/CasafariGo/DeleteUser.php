<?php
declare(strict_types=1);

namespace CasafariSDK\Api\CasafariGo;

final class DeleteUser extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/CasafariGo/DeleteUser [operationId: CasafariGo_DeleteUser] */
    /**
     * Delete CasafariGo User
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoEntityRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\GenericRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\CasafariGo\DeleteUser::class)->post($payload);
    }

}
