<?php

declare(strict_types=1);

namespace CasafariSDK\MarketAnalyticsApi;

final class Analysis extends \CasafariSDK\CasafariAPISDK
{
    /** POST /market-analytics-api/analysis [operationId: market-analytics-api__post__analysis] */
    /**
     * Analysis
     *
     * Market analysis based on the requested property parameters.
     */
    public static function post(\CasafariSDK\DTOs\MarketAnalyticsApi\Analysis\Request $payload): \CasafariSDK\DTOs\MarketAnalyticsApi\Analysis\Response
    {
        return self::client()->resource(\CasafariSDK\Resources\MarketAnalyticsApi\Analysis::class)->post($payload);
    }

}
