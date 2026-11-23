<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V2\Properties;

final class Search extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v2/properties/search',
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
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V2\\Properties\\Search\\Post\\PropertiesSearchCollection',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\PropertiesSearchRequestV2',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search properties (v2)
     *
     * Search properties.
     */
    public function post(?\CasafariSDK\PostParams\Api\V2\Properties\Search $params = null): \CasafariSDK\Collections\Api\V2\Properties\Search\Post\PropertiesSearchCollection
    {
        /** @var \CasafariSDK\Collections\Api\V2\Properties\Search\Post\PropertiesSearchCollection $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
