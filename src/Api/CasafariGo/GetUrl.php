<?php
declare(strict_types=1);

namespace CasafariSDK\Api\CasafariGo;

final class GetUrl extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/CasafariGo/GetUrl [operationId: CasafariGo_GetUrl] */
    /**
     * Get CasafariGo Url
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoUrlRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoUrlRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\CasafariGo\GetUrl::class)->post($payload);
    }

}
