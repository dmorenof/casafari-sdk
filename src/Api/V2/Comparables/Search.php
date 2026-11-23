<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V2\Comparables;

final class Search extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v2/comparables/search [operationId: api__post__v2__comparables__search] */
    /**
     * Search comparables (v2)
     *
     * Returns comparable properties by the given parameters.
     */
    public static function post(?\CasafariSDK\DTOs\Api\SearchComparablesRequestV2 $payload = null): \CasafariSDK\DTOs\Api\SearchComparablesResponseV2
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V2\Comparables\Search::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V2\Comparables\Search::class)->post($payload);
    }

}
