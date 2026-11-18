<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class InnerLocation extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'CityId' => [
        'format' => 'int32',
    ],
    'LocalityId' => [
        'format' => 'int32',
    ],
    'RegionId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $CityId;
    /**
     * Format: int32
     */
    public int $LocalityId;
    /**
     * Format: int32
     */
    public int $RegionId;
    public string $Zonename;

}
