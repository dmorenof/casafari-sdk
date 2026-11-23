<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class ZipcodeBoundary extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/references/zipcode-boundary [operationId: api__post__v1__references__zipcode-boundary] */
    /**
     * Get zipcode boundary by zipcode and country code (v1)
     *
     * Get zipcode boundary by zipcode and country code.
     */
    public static function post(?\CasafariSDK\DTOs\Api\ZipCodeBoundaryFilterV1 $payload = null): \CasafariSDK\DTOs\Api\ZipCodeBoundaryV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\ZipcodeBoundary::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\ZipcodeBoundary::class)->post($payload);
    }

}
