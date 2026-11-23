<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\ListingAlerts;

final class Search extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/listing-alerts/search [operationId: api__post__v1__listing-alerts__search] */
    /**
     * Search alerts (v1)
     *
     * Returns paginated list of alerts (by requested parameters) for currently authenticated user.
     */
    public static function post(?\CasafariSDK\PostParams\Api\V1\ListingAlerts\Search $params = null): \CasafariSDK\Collections\Api\V1\ListingAlerts\Search\Post\ListingAlertsSearchCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Search::class)->post($params);
    }

}
