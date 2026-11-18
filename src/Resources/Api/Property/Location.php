<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Property;

final class Location extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Property/Location',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\LocationRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\LocationRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get Locations
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
