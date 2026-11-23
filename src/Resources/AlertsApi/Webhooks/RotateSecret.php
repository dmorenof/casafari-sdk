<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\AlertsApi\Webhooks;

final class RotateSecret extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/alerts-api/webhooks/rotate-secret',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\RotateSecret\\ResponseSchema',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\RotateSecret\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Rotate signing secret
     *
     * Issues a new current signing secret. By default the previous secrets stay valid for a **24-hour grace window** so you can install the new key before removing the old one. Pass `{"immediate": true}` to revoke all previous secrets right away — use this only when a secret is compromised.
     */
    public function post(\CasafariSDK\DTOs\AlertsApi\RotateSecret\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\RotateSecret\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\RotateSecret\ResponseSchema $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
