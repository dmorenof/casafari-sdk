<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class Agents extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/references/agents',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Agents\\GetStatus401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Agents\\GetStatus403Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Agents\\GetStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Agents\\GetStatus403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\References\\Agents\\Get\\ReferencesAgentsCollection',
    ];

    /**
     * Get agents (v1)
     *
     * Returns a list of all possible agents with user restrictions.
     */
    public function get(\CasafariSDK\GetParams\Api\V1\References\Agents $params): \CasafariSDK\Collections\Api\V1\References\Agents\Get\ReferencesAgentsCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\References\Agents\Get\ReferencesAgentsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

}
