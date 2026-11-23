<?php

declare(strict_types=1);

namespace CasafariSDK\AlertsApi\Crm;

final class Webhook extends \CasafariSDK\CasafariAPISDK
{
    /** PUT /alerts-api/crm/webhook [operationId: alerts-api__put__crm__webhook] */
    /**
     * Set CRM webhook URL
     *
     * Sets (or replaces) the delivery URL for your company CRM integration.
     *
     * Before saving, a **GET** request is sent to the URL — your server must respond with HTTP **200**, otherwise this endpoint returns **400**.
     *
     * Alert deliveries themselves arrive as **POST** requests.
     *
     * The URL is stored per company: changing it here instantly affects every activated feed, including alerts already queued for delivery. Feeds cannot be activated until the webhook is configured.
     *
     * A signing secret is provisioned on the first call and returned in `secret` **once**; later calls return `secret: null`. Lost it? Use `POST /crm/webhook/rotate-secret`.
     */
    public static function put(\CasafariSDK\DTOs\AlertsApi\SetWebhook\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\SetWebhook\ResponseSchema
    {
        return self::client()->resource(\CasafariSDK\Resources\AlertsApi\Crm\Webhook::class)->put($payload);
    }

}
