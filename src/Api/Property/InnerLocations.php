<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Property;

final class InnerLocations extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Property/InnerLocations [operationId: Property_InnerLocations] */
    /**
     * Get InnerLocations
     */
    public static function post(): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocationRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Property\InnerLocations::class)->post();
    }

}
