<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V2\Comparables;

final class Search extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v2/comparables/search',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            400 => '\\CasafariSDK\\Responses\\Errors\\Api\\V2\\Comparables\\Search\\PostStatus400Response',
            401 => '\\CasafariSDK\\Responses\\Errors\\Api\\V2\\Comparables\\Search\\PostStatus401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Api\\V2\\Comparables\\Search\\PostStatus403Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V2\\Comparables\\Search\\PostStatus400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V2\\Comparables\\Search\\PostStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V2\\Comparables\\Search\\PostStatus403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\SearchComparablesResponseV2',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\SearchComparablesRequestV2',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search comparables (v2)
     *
     * Returns comparable properties by the given parameters.
     */
    public function post(?\CasafariSDK\DTOs\Api\SearchComparablesRequestV2 $payload = null): \CasafariSDK\DTOs\Api\SearchComparablesResponseV2
    {
        /** @var \CasafariSDK\DTOs\Api\SearchComparablesResponseV2 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
