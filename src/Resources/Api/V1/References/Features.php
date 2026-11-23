<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class Features extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/references/features',
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
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\References\\Features\\Get\\ReferencesFeaturesCollection',
    ];

    /**
     * Get features (v1)
     *
     * Returns a list of all possible property features.
     */
    public function get(): \CasafariSDK\Collections\Api\V1\References\Features\Get\ReferencesFeaturesCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\References\Features\Get\ReferencesFeaturesCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
