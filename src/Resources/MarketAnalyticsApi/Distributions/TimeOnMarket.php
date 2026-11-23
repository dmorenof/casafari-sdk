<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\MarketAnalyticsApi\Distributions;

final class TimeOnMarket extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/market-analytics-api/distributions/time-on-market',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'success' => [
            200,
            204,
        ],
        'errors' => [
            400 => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Error\\Response',
            422 => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\Error\\Response',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseTypes' => [
            200 => [
                'type' => '\\CasafariSDK\\Collections\\MarketAnalyticsApi\\Distributions\\TimeOnMarket\\Post\\DistributionsTimeOnMarketCollection',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\TimeOnMarketDistribution\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Time On Market Distribution
     *
     * Returns time on market (days and months) distribution by price ranges.<br>Each distribution unit is defined by price boundaries and includes the time on market for properties within those boundaries.
     */
    public function post(\CasafariSDK\DTOs\MarketAnalyticsApi\TimeOnMarketDistribution\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\TimeOnMarket\Post\DistributionsTimeOnMarketCollection
    {
        /** @var ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\TimeOnMarket\Post\DistributionsTimeOnMarketCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
