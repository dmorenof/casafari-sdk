<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class Types extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/references/types',
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
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\References\\Types\\Get\\ReferencesTypesCollection',
    ];

    /**
     * Get types (v1)
     *
     * Returns a list of all possible estate types.
     */
    public function get(): \CasafariSDK\Collections\Api\V1\References\Types\Get\ReferencesTypesCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\References\Types\Get\ReferencesTypesCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
