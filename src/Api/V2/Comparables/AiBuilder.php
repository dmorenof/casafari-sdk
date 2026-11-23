<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V2\Comparables;

final class AiBuilder extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v2/comparables/ai-builder [operationId: api__post__v2__comparables__ai-builder] */
    /**
     * Initialize an AI Builder session (v2)
     *
     * Initializes an AI Builder session from a saved CMA (valuation) and returns
     *     the generated report ID along with the URL of the AI Builder session.
     */
    public static function post(?\CasafariSDK\DTOs\Api\AIBuilderRequestV2 $payload = null): \CasafariSDK\DTOs\Api\AIBuilderResponseV2
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\CasafariSDK\Resources\Api\V2\Comparables\AiBuilder::class)->post();
        }
        return self::client()->resource(\CasafariSDK\Resources\Api\V2\Comparables\AiBuilder::class)->post($payload);
    }

}
