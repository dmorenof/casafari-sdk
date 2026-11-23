<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\References\Locations;

final class ByCoordinates extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/references/locations/by-coordinates [operationId: api__get__v1__references__locations__by-coordinates] */
    /**
     * Get location by passed coordinates (v1)
     *
     * Returns a location for the given coordinates with user restrictions.
     */
    public static function get(\CasafariSDK\GetParams\Api\V1\References\Locations\ByCoordinates $params): \CasafariSDK\DTOs\Api\ReferenceLocationV1
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Locations\ByCoordinates::class)->get($params);
    }

}
