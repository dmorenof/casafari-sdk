<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\MarketAnalyticsApi\Distributions;

final class Bedrooms extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/market-analytics-api/distributions/bedrooms',
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
                'type' => '\\CasafariSDK\\Collections\\MarketAnalyticsApi\\Distributions\\Bedrooms\\Post\\DistributionsBedroomsCollection',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => NULL,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\BedroomsDistribution\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Bedrooms Distribution
     *
     * Returns property distribution based on the number of bedrooms.<br>Each distribution unit includes the bedroom count, number of matching properties, and related analysis.
     */
    public function post(\CasafariSDK\DTOs\MarketAnalyticsApi\BedroomsDistribution\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\Bedrooms\Post\DistributionsBedroomsCollection
    {
        /** @var ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\Bedrooms\Post\DistributionsBedroomsCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
