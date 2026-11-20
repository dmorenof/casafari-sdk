<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V2\Properties;

final class Search extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v2/properties/search [operationId: api__post__v2__properties__search] */
    /**
     * Search properties (v2)
     *
     * Search properties.
     */
    public static function post(?\CasafariSDK\PostParams\Api\V2\Properties\Search $params = null): \CasafariSDK\Collections\Api\V2\Properties\Search\Post\PropertiesSearchCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V2\Properties\Search::class)->post($params);
    }

}
