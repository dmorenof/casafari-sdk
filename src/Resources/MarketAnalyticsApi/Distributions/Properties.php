<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\MarketAnalyticsApi\Distributions;

final class Properties extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/market-analytics-api/distributions/properties',
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
                'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\PropertiesDistribution\\ResponseSchema',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => NULL,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\PropertiesDistribution\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Properties Distribution
     *
     * Returns the properties lightweight data sample and distribution quartiles.<br>Lightweight data includes only price and location data.
     */
    public function post(\CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistribution\RequestSchema $payload): ?\CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistribution\ResponseSchema
    {
        /** @var ?\CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistribution\ResponseSchema $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
