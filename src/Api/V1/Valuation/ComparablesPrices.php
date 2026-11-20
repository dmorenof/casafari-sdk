<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\Valuation;

final class ComparablesPrices extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/valuation/comparables-prices [operationId: api__post__v1__valuation__comparables-prices] */
    /**
     * Search estimated prices (v1)
     *
     * Returns estimated prices by the given parameters.
     */
    public static function post(?\CasafariSDK\DTOs\Api\ComparablesPricesRequestV1 $payload = null): \CasafariSDK\DTOs\Api\ComparablesPricesV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\Valuation\ComparablesPrices::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\Valuation\ComparablesPrices::class)->post($payload);
    }

}
