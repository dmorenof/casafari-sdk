<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location;

final class LocationsLookups extends \Dmorenof\SdkRuntime\DTO
{
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Cities;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Countries;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Localities;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection $Regions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Cities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Cities = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel::class)) : parent::assignMember($name, $value),
            'Countries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Countries = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel::class)) : parent::assignMember($name, $value),
            'Localities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Localities = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel::class)) : parent::assignMember($name, $value),
            'Regions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Regions = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Location\LocationsLookups\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
