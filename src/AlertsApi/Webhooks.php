<?php
declare(strict_types=1);

namespace CasafariSDK\AlertsApi;

final class Webhooks extends \CasafariSDK\CasafariAPISDK
{
    /** PUT /alerts-api/webhooks [operationId: alerts-api__put__webhooks] */
    /**
     * Set webhook URL
     *
     * Sets (or replaces) the delivery URL for **all** your alert feeds.
     *
     * Before saving, a **GET** request is sent to the URL — your server must respond with HTTP **200**, otherwise this endpoint returns **400**.
     *
     * Alert deliveries themselves arrive as **POST** requests with a JSON array body.
     *
     * The URL is stored per user: changing it here instantly affects every feed, including alerts already queued for delivery. Feeds cannot be created until the webhook is configured.
     *
     * A signing secret is provisioned on the first call and returned in `secret` **once**; later calls return `secret: null`. Lost it? Use `POST /webhooks/rotate-secret`.
     */
    public static function put(\CasafariSDK\DTOs\AlertsApi\SetWebhook\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\SetWebhook\ResponseSchema
    {
        return self::client()->resource(\CasafariSDK\Resources\AlertsApi\Webhooks::class)->put($payload);
    }

}
