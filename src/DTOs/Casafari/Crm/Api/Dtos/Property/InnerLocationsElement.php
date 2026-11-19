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
    public int $cityId {
        set {
            $this->assigning('cityId', $value);
            $this->cityId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $countryId {
        set {
            $this->assigning('countryId', $value);
            $this->countryId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $name;
    /**
     * Format: int32
     */
    public int $regionId {
        set {
            $this->assigning('regionId', $value);
            $this->regionId = $value;
        }
    }

}
