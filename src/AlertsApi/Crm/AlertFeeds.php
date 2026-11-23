<?php

declare(strict_types=1);

namespace CasafariSDK\AlertsApi\Crm;

final class AlertFeeds extends \CasafariSDK\CasafariAPISDK
{
    /** GET /alerts-api/crm/alert-feeds [operationId: alerts-api__get__crm__alert-feeds] */
    /**
     * List agents alert feeds
     *
     * Returns the alert feeds of every active agent in your company (and its child companies), newest first. Follow `next_url` directly to get the next page - it is an opaque URL, do not construct it manually.
     */
    public static function get(?\CasafariSDK\GetParams\AlertsApi\Crm\AlertFeeds $params = null): \CasafariSDK\DTOs\AlertsApi\CrmFeedList\ResponseSchema
    {
        return self::client()->resource(\CasafariSDK\Resources\AlertsApi\Crm\AlertFeeds::class)->get($params);
    }

}
