<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Agency;

final class GetAgencies extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Agency/GetAgencies [operationId: Agency_GetAgencies] */
    /**
     * Get Agencies
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyListExternalRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyListRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Agency\GetAgencies::class)->post($payload);
    }

}
