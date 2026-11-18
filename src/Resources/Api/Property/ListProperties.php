<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Property;

final class ListProperties extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Property/ListProperties',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\PropertyListRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\FilterRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get Property List
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\FilterRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyListRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyListRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
