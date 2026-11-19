<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\Property;

final class InnerLocations extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/Property/InnerLocations',
        'responseType' => '\\CasafariSDK\\DTOs\\Casafari\\Crm\\Api\\Dtos\\Property\\InnerLocationRs',
    ];

    /**
     * Get InnerLocations
     */
    public function post(): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocationRs
    {
        /** @var \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocationRs $result */
        $result = $this->executeOperation(self::operation(self::POST));
        return $result;
    }

}
