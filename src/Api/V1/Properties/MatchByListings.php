<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\Properties;

final class MatchByListings extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/properties/match-by-listings [operationId: api__post__v1__properties__match-by-listings] */
    /**
     * Get property by listing IDs (v1)
     *
     * Returns a mapping properties IDs to listing IDs.
     */
    public static function post(?\CasafariSDK\DTOs\Api\PropertiesSearchByListingIDsRequestV1 $payload = null): \CasafariSDK\DTOs\Api\PropertiesSearchByListingIDsResponseV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\Properties\MatchByListings::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\Properties\MatchByListings::class)->post($payload);
    }

}
