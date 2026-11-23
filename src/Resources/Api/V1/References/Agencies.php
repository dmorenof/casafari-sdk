<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class Agencies extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/references/agencies',
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
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\References\\Agencies\\Get\\ReferencesAgenciesCollection',
    ];

    /**
     * Get agencies (v1)
     *
     * Returns a list of all possible agencies with user restrictions.
     */
    public function get(\CasafariSDK\GetParams\Api\V1\References\Agencies $params): \CasafariSDK\Collections\Api\V1\References\Agencies\Get\ReferencesAgenciesCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\References\Agencies\Get\ReferencesAgenciesCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
