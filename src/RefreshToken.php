<?php

declare(strict_types=1);

namespace CasafariSDK;

final class RefreshToken extends \CasafariSDK\CasafariAPISDK
{
    /** GET /refresh-token [operationId: user-management__get__refresh-token] */
    /**
     * Refresh Token
     */
    public static function get(): \CasafariSDK\DTOs\UserManagement\JWTRefreshToken\ResponseSchema
    {
        return self::client()->resource(\CasafariSDK\Resources\RefreshToken::class)->get();
    }

}
