<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Property;

final class Hit extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Property/Hit',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\HitRs',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\HitRq',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Insert Property Visit
     */
    public function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\HitRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\HitRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\HitRs $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
