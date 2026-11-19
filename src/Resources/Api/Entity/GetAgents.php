<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Entity;

final class GetAgents extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Entity/GetAgents',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Entity\\EntityListRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Entity\\SystemUserRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get Agents
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\SystemUserRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityListRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityListRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
