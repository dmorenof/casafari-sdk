<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V2\Comparables\NewDevelopments;

final class Search extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v2/comparables/new-developments/search',
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
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\SearchNewDevelopmentComparablesResponseV2',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\SearchNewDevelopmentComparablesRequestV2',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search new development comparables (v2)
     *
     * Returns comparables for a new development (ND) unit, valued only against other ND units. Resale properties
     *     are never mixed into the results or the estimate. To compare with the resale market, set
     *     `include_gap: true` to get the ND vs resale asking-price gap per m². The regular
     *     `POST api/v2/comparables/search` endpoint remains resale-only.
     */
    public function post(?\CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesRequestV2 $payload = null): \CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2
    {
        /** @var \CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
