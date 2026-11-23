<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V2\Comparables\NewDevelopments;

final class Search extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v2/comparables/new-developments/search [operationId: api__post__v2__comparables__new-developments__search] */
    /**
     * Search new development comparables (v2)
     *
     * Returns comparables for a new development (ND) unit, valued only against other ND units. Resale properties
     *     are never mixed into the results or the estimate. To compare with the resale market, set
     *     `include_gap: true` to get the ND vs resale asking-price gap per m². The regular
     *     `POST api/v2/comparables/search` endpoint remains resale-only.
     */
    public static function post(?\CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesRequestV2 $payload = null): \CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V2\Comparables\NewDevelopments\Search::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V2\Comparables\NewDevelopments\Search::class)->post($payload);
    }

}
