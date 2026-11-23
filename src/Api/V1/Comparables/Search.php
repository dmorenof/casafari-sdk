<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\Comparables;

final class Search extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/comparables/search [operationId: api__post__v1__comparables__search] */
    /**
     * Search comparables (v1)
     *
     * Returns comparable properties by the given parameters.
     */
    public static function post(?\CasafariSDK\DTOs\Api\SearchComparablesRequestV1 $payload = null): \CasafariSDK\DTOs\Api\SearchComparablesResponseV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\Comparables\Search::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\Comparables\Search::class)->post($payload);
    }

}
