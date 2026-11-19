<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Agency;

final class GetAgencies extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Agency/GetAgencies',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Agency\\AgencyListRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Agency\\AgencyListExternalRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get Agencies
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyListExternalRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyListRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyListRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
