<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\CasafariGo;

final class DeleteUser extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/CasafariGo/DeleteUser',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\GenericRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\CasafariGo\\CasafariGoEntityRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete CasafariGo User
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoEntityRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\GenericRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\GenericRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
