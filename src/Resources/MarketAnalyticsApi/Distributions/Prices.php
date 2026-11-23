<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\MarketAnalyticsApi\Distributions;

final class Prices extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/market-analytics-api/distributions/prices',
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
                'type' => '\\CasafariSDK\\Collections\\MarketAnalyticsApi\\Distributions\\Prices\\Post\\DistributionsPricesCollection',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => null,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\PriceDistribution\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Price Distribution
     *
     * Returns the number of properties distributed across price ranges.<br>Each range is defined by price boundaries and shows the number of properties with prices falling within those boundaries.
     */
    public function post(\CasafariSDK\DTOs\MarketAnalyticsApi\PriceDistribution\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\Prices\Post\DistributionsPricesCollection
    {
        /** @var ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\Prices\Post\DistributionsPricesCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
