<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Property;

final class SendProperty extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Property/SendProperty',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\PropertyRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\PropertyRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Insert/Update Property
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
