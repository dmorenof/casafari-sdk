<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V2\Comparables;

final class AiBuilder extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v2/comparables/ai-builder',
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
            404 => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
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
            404 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\AIBuilderResponseV2',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\AIBuilderRequestV2',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Initialize an AI Builder session (v2)
     *
     * Initializes an AI Builder session from a saved CMA (valuation) and returns
     *     the generated report ID along with the URL of the AI Builder session.
     */
    public function post(?\CasafariSDK\DTOs\Api\AIBuilderRequestV2 $payload = null): \CasafariSDK\DTOs\Api\AIBuilderResponseV2
    {
        /** @var \CasafariSDK\DTOs\Api\AIBuilderResponseV2 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
