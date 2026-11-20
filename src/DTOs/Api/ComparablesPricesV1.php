<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class ComparablesPricesV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'estimated_prices',
    'statistics',
];

    /**
     * Estimated prices calculated based on the found comparables (for `operation` defined in the request).
     */
    public \CasafariSDK\DTOs\Api\ComparablesPricesV1\EstimatedPricesDTO $estimated_prices;
    /**
     * Statistics information for the found comparables (for `operation` defined in the request).
     */
    public ?\CasafariSDK\DTOs\Api\ComparablesPricesV1\StatisticsDTO $statistics;

}
