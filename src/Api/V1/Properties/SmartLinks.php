<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\Properties;

final class SmartLinks extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/properties/smart-links [operationId: api__post__v1__properties__smart-links] */
    /**
     * Create a smart link (BETA) (v1)
     *
     * Generates a smart link that provides detailed property information
     *     with customizable components, branding, and user/company information overrides.
     */
    public static function post(?\CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1 $payload = null): \CasafariSDK\DTOs\Api\CreateSmartLinkResponseV1
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V1\Properties\SmartLinks::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\Properties\SmartLinks::class)->post($payload);
    }

}
