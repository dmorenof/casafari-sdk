<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\References;

final class ZipcodeBoundary extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/references/zipcode-boundary',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\ZipcodeBoundary\\PostStatus401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\ZipcodeBoundary\\PostStatus403Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\ZipcodeBoundary\\PostStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\References\\ZipcodeBoundary\\PostStatus403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\ZipCodeBoundaryV1',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\ZipCodeBoundaryFilterV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get zipcode boundary by zipcode and country code (v1)
     *
     * Get zipcode boundary by zipcode and country code.
     */
    public function post(?\CasafariSDK\DTOs\Api\ZipCodeBoundaryFilterV1 $payload = null): \CasafariSDK\DTOs\Api\ZipCodeBoundaryV1
    {
        /** @var \CasafariSDK\DTOs\Api\ZipCodeBoundaryV1 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
