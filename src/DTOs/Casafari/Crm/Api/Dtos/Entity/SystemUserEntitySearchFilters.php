<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class SystemUserEntitySearchFilters extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'CityId' => [
        'format' => 'int32',
    ],
    'CountryId' => [
        'format' => 'int32',
    ],
    'LocalityId' => [
        'format' => 'int32',
    ],
    'RegionId' => [
        'format' => 'int32',
    ],
];

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $AgencyIds;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $AgentIds;
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
    public int $CountryId {
        set {
            $this->assigning('CountryId', $value);
            $this->CountryId = $value;
        }
    }
    public bool $GetInactive;
    public bool $IncludeChildrenAgencies;
    /**
     * Format: int32
     */
    public int $LocalityId {
        set {
            $this->assigning('LocalityId', $value);
            $this->LocalityId = $value;
        }
    }
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $LocationIds;
    public string $Name;
    /**
     * Format: int32
     */
    public int $RegionId {
        set {
            $this->assigning('RegionId', $value);
            $this->RegionId = $value;
        }
    }

}
