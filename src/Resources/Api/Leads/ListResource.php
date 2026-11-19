<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Leads;

final class ListResource extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Leads/List',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Lead\\ListLeadsRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Lead\\GetLeadRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get Sales/Listings
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\GetLeadRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
