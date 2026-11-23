<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\AlertsApi\Crm;

final class AlertFeeds extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/alerts-api/crm/alert-feeds',
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
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\CrmFeedList\\ResponseSchema',
    ];

    /**
     * List agents alert feeds
     *
     * Returns the alert feeds of every active agent in your company (and its child companies), newest first. Follow `next_url` directly to get the next page - it is an opaque URL, do not construct it manually.
     */
    public function get(?\CasafariSDK\GetParams\AlertsApi\Crm\AlertFeeds $params = null): \CasafariSDK\DTOs\AlertsApi\CrmFeedList\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\CrmFeedList\ResponseSchema $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
