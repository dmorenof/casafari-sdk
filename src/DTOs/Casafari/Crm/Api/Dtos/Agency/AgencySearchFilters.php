<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencySearchFilters extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgencyHierarchyId' => [
        'format' => 'int32',
    ],
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

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $AgenciesIds;
    /**
     * Format: int32
     */
    public int $AgencyHierarchyId;
    /**
     * Format: int32
     */
    public int $CityId;
    /**
     * Format: int32
     */
    public int $CountryId;
    public bool $ExtraField1;
    public bool $IncludeChildAgencies;
    public bool $IsShop;
    /**
     * Format: int32
     */
    public int $LocalityId;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $LocationIds;
    public string $Name;
    public bool $OnlyChildAgencies;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $ParentIds;
    /**
     * Format: int32
     */
    public int $RegionId;
    public bool $ShowOnlyVisibleOnWebsite;

}
