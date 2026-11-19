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
    public int $CityId {
        set {
            $this->assigning('CityId', $value);
            $this->CityId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $LocalityId {
        set {
            $this->assigning('LocalityId', $value);
            $this->LocalityId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $RegionId {
        set {
            $this->assigning('RegionId', $value);
            $this->RegionId = $value;
        }
    }
    public string $Zonename;

}
