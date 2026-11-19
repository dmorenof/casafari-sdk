<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Property;

final class DeleteProperty extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Property/DeleteProperty [operationId: Property_DeleteProperty] */
    /**
     * Delete Property
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Property\DeleteProperty::class)->post($payload);
    }

}
