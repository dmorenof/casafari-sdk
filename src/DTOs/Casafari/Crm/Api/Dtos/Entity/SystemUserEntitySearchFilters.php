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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AgencyIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->AgencyIds = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            'AgentIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->AgentIds = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            'CityId' => is_int($value) ? $this->CityId = $value : parent::assignMember($name, $value),
            'CountryId' => is_int($value) ? $this->CountryId = $value : parent::assignMember($name, $value),
            'GetInactive' => is_bool($value) ? $this->GetInactive = $value : parent::assignMember($name, $value),
            'IncludeChildrenAgencies' => is_bool($value) ? $this->IncludeChildrenAgencies = $value : parent::assignMember($name, $value),
            'LocalityId' => is_int($value) ? $this->LocalityId = $value : parent::assignMember($name, $value),
            'LocationIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->LocationIds = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'RegionId' => is_int($value) ? $this->RegionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
