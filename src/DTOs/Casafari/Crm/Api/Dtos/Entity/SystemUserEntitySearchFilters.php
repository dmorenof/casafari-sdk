<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class SystemUserEntitySearchFilters extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

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
    public int $CityId;
    /**
     * Format: int32
     */
    public int $CountryId;
    public bool $GetInactive;
    public bool $IncludeChildrenAgencies;
    /**
     * Format: int32
     */
    public int $LocalityId;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $LocationIds;
    public string $Name;
    /**
     * Format: int32
     */
    public int $RegionId;

}
