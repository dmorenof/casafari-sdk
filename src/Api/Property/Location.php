<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Property;

final class Location extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Property/Location [operationId: Property_Location] */
    /**
     * Get Locations
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Property\Location::class)->post($payload);
    }

}
