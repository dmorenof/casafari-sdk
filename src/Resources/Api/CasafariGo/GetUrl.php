<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\CasafariGo;

final class GetUrl extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/CasafariGo/GetUrl',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\CasafariGo\\CasafariGoUrlRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\CasafariGo\\CasafariGoUrlRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get CasafariGo Url
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoUrlRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoUrlRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CasafariGo\CasafariGoUrlRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
