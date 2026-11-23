<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\References\Locations;

final class Typeahead extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/references/locations/typeahead [operationId: api__post__v1__references__locations__typeahead] */
    /**
     * Get locations typeahead suggestions scoped by country code (v1)
     *
     * Returns location typeahead suggestions within the given country (ES or PT).
     */
    public static function post(?\CasafariSDK\DTOs\Api\LocationsTypeAheadFilterV1 $payload = null): \CasafariSDK\DTOs\Api\TypeAheadV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Locations\Typeahead::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Locations\Typeahead::class)->post($payload);
    }

}
