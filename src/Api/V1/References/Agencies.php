<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\References;

final class Agencies extends \CasafariSDK\CasafariAPISDK
{
    /** GET /api/v1/references/agencies [operationId: api__get__v1__references__agencies] */
    /**
     * Get agencies (v1)
     *
     * Returns a list of all possible agencies with user restrictions.
     */
    public static function get(\CasafariSDK\GetParams\Api\V1\References\Agencies $params): \CasafariSDK\Collections\Api\V1\References\Agencies\Get\ReferencesAgenciesCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\References\Agencies::class)->get($params);
    }

}
