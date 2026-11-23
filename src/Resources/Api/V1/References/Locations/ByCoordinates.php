<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References\Locations;

final class ByCoordinates extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/references/locations/by-coordinates',
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
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\ReferenceLocationV1',
    ];

    /**
     * Get location by passed coordinates (v1)
     *
     * Returns a location for the given coordinates with user restrictions.
     */
    public function get(\CasafariSDK\GetParams\Api\V1\References\Locations\ByCoordinates $params): \CasafariSDK\DTOs\Api\ReferenceLocationV1
    {
        /** @var \CasafariSDK\DTOs\Api\ReferenceLocationV1 $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
