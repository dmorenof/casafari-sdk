<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\CasafariGo;

final class CreateUser extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/CasafariGo/CreateUser',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\CasafariGo\\CasafariGoEntityRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\CasafariGo\\CasafariGoEntityRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create CasafariGo User
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoEntityRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoEntityRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoEntityRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
