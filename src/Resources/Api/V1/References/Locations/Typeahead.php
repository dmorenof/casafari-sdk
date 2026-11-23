<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References\Locations;

final class Typeahead extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/references/locations/typeahead',
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
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\TypeAheadV1',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\LocationsTypeAheadFilterV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get locations typeahead suggestions scoped by country code (v1)
     *
     * Returns location typeahead suggestions within the given country (ES or PT).
     */
    public function post(?\CasafariSDK\DTOs\Api\LocationsTypeAheadFilterV1 $payload = null): \CasafariSDK\DTOs\Api\TypeAheadV1
    {
        /** @var \CasafariSDK\DTOs\Api\TypeAheadV1 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
