<?php

declare(strict_types=1);

namespace CasafariSDK\AlertsApi\Crm\AlertFeeds;

final class Deactivate extends \CasafariSDK\CasafariAPISDK
{
    /** POST /alerts-api/crm/alert-feeds/deactivate [operationId: alerts-api__post__crm__alert-feeds__deactivate] */
    /**
     * Deactivate feeds
     *
     * Stops delivering the given feeds to your CRM webhook. The feeds keep working in the app.
     *
     * All-or-nothing request. If any feed ID in `feed_ids` doesn't exist in your company, the API returns 404 with `"detail": "Feeds not found."` and no feeds are deactivated, including the valid ones. Send only the IDs of existing feeds.
     */
    public static function post(\CasafariSDK\DTOs\AlertsApi\CrmFeedIds\RequestSchema $payload): void
    {
        self::client()->resource(\CasafariSDK\Resources\AlertsApi\Crm\AlertFeeds\Deactivate::class)->post($payload);
    }

}
