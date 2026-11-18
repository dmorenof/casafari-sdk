<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Property;

final class Hit extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Property/Hit [operationId: Property_Hit] */
    /**
     * Insert Property Visit
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\HitRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\HitRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Property\Hit::class)->post($payload);
    }

}
