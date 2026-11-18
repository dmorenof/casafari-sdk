<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location;

final class LocationsLookups extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Cities;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Countries;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Localities;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Regions;

}
