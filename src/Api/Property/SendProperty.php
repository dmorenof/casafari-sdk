<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Property;

final class SendProperty extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Property/SendProperty [operationId: Property_SendProperty] */
    /**
     * Insert/Update Property
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Property\SendProperty::class)->post($payload);
    }

}
