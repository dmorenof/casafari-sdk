<?php

declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class Agents extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/references/agents [operationId: api__get__v1__references__agents] */
    /**
     * Get agents (v1)
     *
     * Returns a list of all possible agents with user restrictions.
     */
    public static function get(\CasafariSDK\GetParams\Api\V1\References\Agents $params): \CasafariSDK\Collections\Api\V1\References\Agents\Get\ReferencesAgentsCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Agents::class)->get($params);
    }

}
