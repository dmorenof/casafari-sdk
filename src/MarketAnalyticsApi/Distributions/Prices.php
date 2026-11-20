<?php
declare(strict_types=1);

namespace CasafariSDK\MarketAnalyticsApi\Distributions;

final class Prices extends \CasafariSDK\CasafariAPISDK
{
    /** POST /market-analytics-api/distributions/prices [operationId: market-analytics-api__post__distributions__prices] */
    /**
     * Price Distribution
     *
     * Returns the number of properties distributed across price ranges.<br>Each range is defined by price boundaries and shows the number of properties with prices falling within those boundaries.
     */
    public static function post(\CasafariSDK\DTOs\MarketAnalyticsApi\PriceDistribution\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\Prices\Post\DistributionsPricesCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\MarketAnalyticsApi\Distributions\Prices::class)->post($payload);
    }

}
