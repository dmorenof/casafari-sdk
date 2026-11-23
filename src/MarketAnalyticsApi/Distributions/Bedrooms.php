<?php

declare(strict_types=1);

namespace CasafariSDK\MarketAnalyticsApi\Distributions;

final class Bedrooms extends \CasafariSDK\CasafariAPISDK
{
    /** POST /market-analytics-api/distributions/bedrooms [operationId: market-analytics-api__post__distributions__bedrooms] */
    /**
     * Bedrooms Distribution
     *
     * Returns property distribution based on the number of bedrooms.<br>Each distribution unit includes the bedroom count, number of matching properties, and related analysis.
     */
    public static function post(\CasafariSDK\DTOs\MarketAnalyticsApi\BedroomsDistribution\RequestSchema $payload): ?\CasafariSDK\Collections\MarketAnalyticsApi\Distributions\Bedrooms\Post\DistributionsBedroomsCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\MarketAnalyticsApi\Distributions\Bedrooms::class)->post($payload);
    }

}
