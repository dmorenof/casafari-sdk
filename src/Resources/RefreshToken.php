<?php
declare(strict_types=1);

namespace CasafariSDK\Resources;

final class RefreshToken extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/refresh-token',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\UserManagement\\JWTRefreshToken\\ResponseSchema',
    ];

    /**
     * Refresh Token
     */
    public function get(): \CasafariSDK\DTOs\UserManagement\JWTRefreshToken\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\UserManagement\JWTRefreshToken\ResponseSchema $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
