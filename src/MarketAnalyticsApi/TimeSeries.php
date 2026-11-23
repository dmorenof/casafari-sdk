<?php
declare(strict_types=1);

namespace CasafariSDK\MarketAnalyticsApi;

final class TimeSeries extends \CasafariSDK\CasafariAPISDK
{
    /** POST /market-analytics-api/time-series [operationId: market-analytics-api__post__time-series] */
    /**
     * Time Series
     *
     * Returns time series data for the real estate market.<br>Each time series unit includes the interval start date based on the provided `date_interval` and a value corresponding to the selected `data_point`.
     */
    public static function post(\CasafariSDK\DTOs\MarketAnalyticsApi\TimeSeries\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\TimeSeries\Post\MarketAnalyticsApiTimeSeriesCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\MarketAnalyticsApi\TimeSeries::class)->post($payload);
    }

}
