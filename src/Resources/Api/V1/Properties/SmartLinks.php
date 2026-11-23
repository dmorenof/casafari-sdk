<?php

declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\Properties;

final class SmartLinks extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/properties/smart-links',
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
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\CreateSmartLinkResponseV1',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\CreateSmartLinkRequestV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Create a smart link (BETA) (v1)
     *
     * Generates a smart link that provides detailed property information
     *     with customizable components, branding, and user/company information overrides.
     */
    public function post(?\CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1 $payload = null): \CasafariSDK\DTOs\Api\CreateSmartLinkResponseV1
    {
        /** @var \CasafariSDK\DTOs\Api\CreateSmartLinkResponseV1 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
