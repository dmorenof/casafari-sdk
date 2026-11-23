<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class Features extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/references/features [operationId: api__get__v1__references__features] */
    /**
     * Get features (v1)
     *
     * Returns a list of all possible property features.
     */
    public static function get(): \CasafariSDK\Collections\Api\V1\References\Features\Get\ReferencesFeaturesCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Features::class)->get();
    }

}
