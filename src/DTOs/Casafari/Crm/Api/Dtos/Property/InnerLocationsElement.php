<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Location (CASAFARI)
 */
final class InnerLocationsElement extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'cityId' => [
        'format' => 'int32',
    ],
    'countryId' => [
        'format' => 'int32',
    ],
    'id' => [
        'format' => 'int32',
    ],
    'regionId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $cityId;
    /**
     * Format: int32
     */
    public int $countryId;
    /**
     * Format: int32
     */
    public int $id;
    public string $name;
    /**
     * Format: int32
     */
    public int $regionId;

}
