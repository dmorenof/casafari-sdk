<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class Locations extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/references/locations [operationId: api__post__v1__references__locations] */
    /**
     * Get locations (v1)
     *
     * Returns a list of all possible locations with user restrictions.
     */
    public static function post(?\CasafariSDK\DTOs\Api\GetLocationsV1 $payload = null): \CasafariSDK\DTOs\Api\LocationsV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Locations::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Locations::class)->post($payload);
    }

}
