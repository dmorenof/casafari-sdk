<?php
declare(strict_types=1);

namespace CasafariSDK\Api\V1\Properties;

final class Search extends \CasafariSDK\CasafariAPISDK
{
    /** POST /api/v1/properties/search [operationId: api__post__v1__properties__search] */
    /**
     * Search properties (v1)
     *
     * Search properties.
     */
    public static function post(?\CasafariSDK\PostParams\Api\V1\Properties\Search $params = null): \CasafariSDK\Collections\Api\V1\Properties\Search\Post\PropertiesSearchCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\Properties\Search::class)->post($params);
    }

    /** GET /api/v1/properties/search/{property_id} [operationId: api__get__v1__properties__search__{property_id}] */
    /**
     * Get property by ID (v1)
     *
     * Returns a property object.
     */
    public static function getByPropertyId(string $property_id, ?\CasafariSDK\GetParams\Api\V1\Properties\Search\ByPropertyId $params = null): \CasafariSDK\Collections\Api\V1\Properties\Search\ByPropertyId\Get\SearchByPropertyIdCollection
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\V1\Properties\Search::class)->getByPropertyId($property_id, $params);
    }

}
