<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\ListingAlerts;

final class Feeds extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/listing-alerts/feeds [operationId: api__get__v1__listing-alerts__feeds] */
    /**
     * Get feeds list (v1)
     *
     * Returns all alerts feeds for currently authenticated user.
     */
    public static function get(?\CasafariSDK\GetParams\Api\V1\ListingAlerts\Feeds $params = null): \CasafariSDK\Collections\Api\V1\ListingAlerts\Feeds\Get\ListingAlertsFeedsCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds::class)->get($params);
    }

    /** POST /api/v1/listing-alerts/feeds [operationId: api__post__v1__listing-alerts__feeds] */
    /**
     * Create feed (v1)
     *
     * Create alerts feed for currently authenticated user.<br/>
     *     Feed is a predefined set of conditions to filter alerts by.<br/>
     *     The `id` of created feed then should be used as URL parameter for
     *     [get alerts by feed](/#operation/getAlertsFeed) endpoint
     *     to get alerts filtered by feed filter conditions.
     */
    public static function post(?\CasafariSDK\DTOs\Api\AlertsFeedV1 $payload = null): \CasafariSDK\DTOs\Api\AlertsFeedV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds::class)->post($payload);
    }

    /** DELETE /api/v1/listing-alerts/feeds/{id} [operationId: api__delete__v1__listing-alerts__feeds__{id}] */
    /**
     * Delete feed (v1)
     *
     * Delete alerts feed (by feed ID) for currently authenticated user.
     */
    public static function deleteById(string $id): \CasafariSDK\Responses\Api\V1\ListingAlerts\Feeds\ById\Delete
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds::class)->deleteById($id);
    }

    /** GET /api/v1/listing-alerts/feeds/{id} [operationId: api__get__v1__listing-alerts__feeds__{id}] */
    /**
     * Get alerts by feed (v1)
     *
     * Returns paginated list of alerts (by feed ID) for currently authenticated user.
     */
    public static function getById(string $id, ?\CasafariSDK\GetParams\Api\V1\ListingAlerts\Feeds\ById $params = null): \CasafariSDK\Collections\Api\V1\ListingAlerts\Feeds\ById\Get\FeedsByIdCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds::class)->getById($id, $params);
    }

}
