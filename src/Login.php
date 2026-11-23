<?php
declare(strict_types=1);

namespace CasafariSDK;

final class Login extends \CasafariSDK\CasafariAPISDK
{
    /** POST /login [operationId: user-management__post__login] */
    /**
     * Login
     */
    public static function post(\CasafariSDK\DTOs\UserManagement\Login\RequestSchema $payload): \CasafariSDK\DTOs\UserManagement\JWTToken\ResponseSchema
    {
        return self::client()->resource(\CasafariSDK\Resources\Login::class)->post($payload);
    }

}
