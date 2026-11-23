<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\Properties;

final class Search extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/properties/search',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            400 => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
            401 => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\Properties\\Search\\Post\\PropertiesSearchCollection',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\PropertiesSearchRequestV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search properties (v1)
     *
     * Search properties.
     */
    public function post(?\CasafariSDK\PostParams\Api\V1\Properties\Search $params = null): \CasafariSDK\Collections\Api\V1\Properties\Search\Post\PropertiesSearchCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\Properties\Search\Post\PropertiesSearchCollection $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

    private const array GET_BY_PROPERTY_ID = [
        'method' => 'GET',
        'path' => '/api/v1/properties/search/{property_id}',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
            404 => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\Properties\\Search\\ByPropertyId\\Get\\SearchByPropertyIdCollection',
    ];

    /**
     * Get property by ID (v1)
     *
     * Returns a property object.
     */
    public function getByPropertyId(string $property_id, ?\CasafariSDK\GetParams\Api\V1\Properties\Search\ByPropertyId $params = null): \CasafariSDK\Collections\Api\V1\Properties\Search\ByPropertyId\Get\SearchByPropertyIdCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\Properties\Search\ByPropertyId\Get\SearchByPropertyIdCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_PROPERTY_ID), path: ['property_id' => $property_id], parameters: $params);
        return $result;
    }

}
