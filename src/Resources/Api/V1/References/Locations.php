<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class Locations extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/references/locations',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Locations\\PostStatus401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Locations\\PostStatus403Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Locations\\PostStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\Locations\\PostStatus403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\LocationsV1',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\GetLocationsV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get locations (v1)
     *
     * Returns a list of all possible locations with user restrictions.
     */
    public function post(?\CasafariSDK\DTOs\Api\GetLocationsV1 $payload = null): \CasafariSDK\DTOs\Api\LocationsV1
    {
        /** @var \CasafariSDK\DTOs\Api\LocationsV1 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
