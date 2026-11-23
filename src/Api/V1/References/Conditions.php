<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class Conditions extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/references/conditions [operationId: api__get__v1__references__conditions] */
    /**
     * Get conditions (v1)
     *
     * Returns a list of all possible estate conditions.
     */
    public static function get(): \CasafariSDK\Collections\Api\V1\References\Conditions\Get\ReferencesConditionsCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Conditions::class)->get();
    }

}
