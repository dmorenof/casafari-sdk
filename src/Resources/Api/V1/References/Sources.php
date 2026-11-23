<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class Sources extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/references/sources',
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
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\References\\Sources\\Get\\ReferencesSourcesCollection',
    ];

    /**
     * Get sources (v1)
     *
     * Returns a list of all domains for the requested location.
     */
    public function get(\CasafariSDK\GetParams\Api\V1\References\Sources $params): \CasafariSDK\Collections\Api\V1\References\Sources\Get\ReferencesSourcesCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\References\Sources\Get\ReferencesSourcesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
