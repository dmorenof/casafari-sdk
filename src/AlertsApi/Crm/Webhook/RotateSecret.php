<?php

declare(strict_types=1);

namespace CasafariSDK\AlertsApi\Crm\Webhook;

final class RotateSecret extends \CasafariSDK\CasafariAPISDK
{
    /** POST /alerts-api/crm/webhook/rotate-secret [operationId: alerts-api__post__crm__webhook__rotate-secret] */
    /**
     * Rotate CRM signing secret
     *
     * Issues a new current signing secret. By default the previous secrets stay valid for a **24-hour grace window** so you can install the new key before removing the old one. Pass `{"immediate": true}` to revoke all previous secrets right away — use this only when a secret is compromised.
     */
    public static function post(\CasafariSDK\DTOs\AlertsApi\RotateSecret\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\RotateSecret\ResponseSchema
    {
        return self::client()->resource(\CasafariSDK\Resources\AlertsApi\Crm\Webhook\RotateSecret::class)->post($payload);
    }

}
