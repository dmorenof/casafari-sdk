<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\ListingAlerts\Feeds\ById;

final class Update extends \CasafariSDK\CasafariAPISDK
{
    /** PUT /api/v1/listing-alerts/feeds/{id}/update [operationId: api__put__v1__listing-alerts__feeds__{id}__update] */
    /**
     * Update feed (v1)
     *
     * Update alerts feed by id.
     */
    public static function put(string $id, ?\CasafariSDK\DTOs\Api\AlertsFeedV1 $payload = null): \CasafariSDK\DTOs\Api\AlertsFeedV1
    {
        if (func_num_args() <= 1) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds\ById\Update::class)->put($id);
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds\ById\Update::class)->put($id, $payload);
    }

}
