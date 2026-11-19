<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Leads;

final class Insert extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Leads/Insert',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Lead\\LeadtRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Lead\\LeadRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadtRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadtRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
