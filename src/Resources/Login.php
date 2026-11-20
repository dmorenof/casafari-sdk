<?php
declare(strict_types=1);

namespace CasafariSDK\Resources;

final class Login extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/login',
        'errors' => [
            422 => '\\CasafariSDK\\DTOs\\UserManagement\\HTTPValidationError',
        ],
        'errorResponses' => [
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\UserManagement\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\UserManagement\\JWTToken\\ResponseSchema',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\UserManagement\\Login\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Login
     */
    public function post(\CasafariSDK\DTOs\UserManagement\Login\RequestSchema $payload): \CasafariSDK\DTOs\UserManagement\JWTToken\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\UserManagement\JWTToken\ResponseSchema $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
