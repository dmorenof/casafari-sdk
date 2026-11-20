<?php
declare(strict_types=1);

namespace CasafariSDK\MarketAnalyticsApi\Distributions;

final class TimeOnMarket extends \CasafariSDK\CasafariAPISDK
{
    /** POST /market-analytics-api/distributions/time-on-market [operationId: market-analytics-api__post__distributions__time-on-market] */
    /**
     * Time On Market Distribution
     *
     * Returns time on market (days and months) distribution by price ranges.<br>Each distribution unit is defined by price boundaries and includes the time on market for properties within those boundaries.
     */
    public static function post(\CasafariSDK\DTOs\MarketAnalyticsApi\TimeOnMarketDistribution\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\TimeOnMarket\Post\DistributionsTimeOnMarketCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\MarketAnalyticsApi\Distributions\TimeOnMarket::class)->post($payload);
    }

}
