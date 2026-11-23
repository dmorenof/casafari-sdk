<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class Sources extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/references/sources [operationId: api__get__v1__references__sources] */
    /**
     * Get sources (v1)
     *
     * Returns a list of all domains for the requested location.
     */
    public static function get(\CasafariSDK\GetParams\Api\V1\References\Sources $params): \CasafariSDK\Collections\Api\V1\References\Sources\Get\ReferencesSourcesCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Sources::class)->get($params);
    }

}
