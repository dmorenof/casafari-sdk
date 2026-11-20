<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class Conditions extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/references/conditions',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Conditions\\GetStatus401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Conditions\\GetStatus403Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Conditions\\GetStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Conditions\\GetStatus403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\References\\Conditions\\Get\\ReferencesConditionsCollection',
    ];

    /**
     * Get conditions (v1)
     *
     * Returns a list of all possible estate conditions.
     */
    public function get(): \CasafariSDK\Collections\Api\V1\References\Conditions\Get\ReferencesConditionsCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\References\Conditions\Get\ReferencesConditionsCollection $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
