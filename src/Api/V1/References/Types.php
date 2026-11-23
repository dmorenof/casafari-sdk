<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class Types extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/references/types [operationId: api__get__v1__references__types] */
    /**
     * Get types (v1)
     *
     * Returns a list of all possible estate types.
     */
    public static function get(): \CasafariSDK\Collections\Api\V1\References\Types\Get\ReferencesTypesCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Types::class)->get();
    }

}
