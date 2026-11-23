<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\AlertsApi\Crm;

final class Webhook extends \CasafariSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/alerts-api/crm/webhook',
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
    public function put(\CasafariSDK\DTOs\AlertsApi\SetWebhook\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\SetWebhook\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\SetWebhook\ResponseSchema $result */
        $result = $this->executeBody(self::operation(self::PUT), $payload);
        return $result;
    }

}
