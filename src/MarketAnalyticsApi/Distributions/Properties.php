<?php
declare(strict_types=1);

namespace CasafariSDK\MarketAnalyticsApi\Distributions;

final class Properties extends \CasafariSDK\CasafariAPISDK
{
    /** POST /market-analytics-api/distributions/properties [operationId: market-analytics-api__post__distributions__properties] */
    /**
     * Properties Distribution
     *
     * Returns the properties lightweight data sample and distribution quartiles.<br>Lightweight data includes only price and location data.
     */
    public static function post(\CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistribution\RequestSchema $payload): ?\CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistribution\ResponseSchema
    {
        return self::client()->resource(\CasafariSDK\Resources\MarketAnalyticsApi\Distributions\Properties::class)->post($payload);
    }

}
