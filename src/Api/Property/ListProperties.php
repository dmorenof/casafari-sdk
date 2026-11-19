<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Property;

final class ListProperties extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Property/ListProperties [operationId: Property_ListProperties] */
    /**
     * Get Property List
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\FilterRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyListRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Property\ListProperties::class)->post($payload);
    }

}
