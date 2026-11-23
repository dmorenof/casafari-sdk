<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\MarketAnalyticsApi;

final class Analysis extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/market-analytics-api/analysis',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            400 => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Error\\Response',
            404 => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Error\\Response',
            422 => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Error\\Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Error\\Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Analysis\\Response',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Analysis\\Request',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Analysis
     *
     * Market analysis based on the requested property parameters.
     */
    public function post(\CasafariSDK\DTOs\MarketAnalyticsApi\Analysis\Request $payload): \CasafariSDK\DTOs\MarketAnalyticsApi\Analysis\Response
    {
        /** @var \CasafariSDK\DTOs\MarketAnalyticsApi\Analysis\Response $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
