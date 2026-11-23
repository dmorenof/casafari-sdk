<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\AlertsApi;

final class Webhooks extends \CasafariSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/alerts-api/webhooks',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            400 => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\SetWebhook\\ResponseSchema',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\SetWebhook\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

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
    public function put(\CasafariSDK\DTOs\AlertsApi\SetWebhook\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\SetWebhook\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\SetWebhook\ResponseSchema $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
