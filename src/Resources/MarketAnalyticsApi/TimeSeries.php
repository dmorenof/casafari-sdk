<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\MarketAnalyticsApi;

final class TimeSeries extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/market-analytics-api/time-series',
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
                'type' => '\\CasafariSDK\\Collections\\MarketAnalyticsApi\\TimeSeries\\Post\\MarketAnalyticsApiTimeSeriesCollection',
                'schemaNullable' => false,
            ],
            204 => [
                'type' => NULL,
                'schemaNullable' => false,
            ],
        ],
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\MarketAnalyticsApi\\TimeSeries\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Time Series
     *
     * Returns time series data for the real estate market.<br>Each time series unit includes the interval start date based on the provided `date_interval` and a value corresponding to the selected `data_point`.
     */
    public function post(\CasafariSDK\DTOs\MarketAnalyticsApi\TimeSeries\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\TimeSeries\Post\MarketAnalyticsApiTimeSeriesCollection
    {
        /** @var ?\CasafariSDK\Collections\MarketAnalyticsApi\TimeSeries\Post\MarketAnalyticsApiTimeSeriesCollection $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
