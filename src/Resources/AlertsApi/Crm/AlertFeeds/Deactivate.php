<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\AlertsApi\Crm\AlertFeeds;

final class Deactivate extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/alerts-api/crm/alert-feeds/deactivate',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'success' => [
            204,
        ],
        'errors' => [
            404 => '\\CasafariSDK\\DTOs\\AlertsApi\\CrmFeedsNotFoundSchema',
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\CrmFeedsNotFoundSchema',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\CrmFeedIds\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Deactivate feeds
     *
     * Stops delivering the given feeds to your CRM webhook. The feeds keep working in the app.
     *
     * All-or-nothing request. If any feed ID in `feed_ids` doesn't exist in your company, the API returns 404 with `"detail": "Feeds not found."` and no feeds are deactivated, including the valid ones. Send only the IDs of existing feeds.
     */
    public function post(\CasafariSDK\DTOs\AlertsApi\CrmFeedIds\RequestSchema $payload): void
    {
        $this->executeBody(self::operation(self::POST), $payload);
        return;
    }

}
