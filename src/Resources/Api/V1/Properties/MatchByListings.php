<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\Properties;

final class MatchByListings extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/properties/match-by-listings',
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
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\PropertiesSearchByListingIDsResponseV1',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\PropertiesSearchByListingIDsRequestV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get property by listing IDs (v1)
     *
     * Returns a mapping properties IDs to listing IDs.
     */
    public function post(?\CasafariSDK\DTOs\Api\PropertiesSearchByListingIDsRequestV1 $payload = null): \CasafariSDK\DTOs\Api\PropertiesSearchByListingIDsResponseV1
    {
        /** @var \CasafariSDK\DTOs\Api\PropertiesSearchByListingIDsResponseV1 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
