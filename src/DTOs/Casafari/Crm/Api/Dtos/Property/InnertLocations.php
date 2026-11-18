<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class InnertLocations extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $CityIds;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $LocalityIds;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $RegionIds;
    public \CasafariSDK\Collections\StringCollection $Zonenames;

}
