<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\Comparables;

final class Search extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/comparables/search',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            400 => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
            401 => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\SearchComparablesResponseV1',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\SearchComparablesRequestV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search comparables (v1)
     *
     * Returns comparable properties by the given parameters.
     */
    public function post(?\CasafariSDK\DTOs\Api\SearchComparablesRequestV1 $payload = null): \CasafariSDK\DTOs\Api\SearchComparablesResponseV1
    {
        /** @var \CasafariSDK\DTOs\Api\SearchComparablesResponseV1 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
