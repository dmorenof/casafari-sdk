<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class LocationList extends \Dmorenof\SdkRuntime\DTO
{
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\LocationList\CountryCodeEnum $CountryCode;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $LocationIds;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CountryCode' => is_string($value) ? $this->CountryCode = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\LocationList\CountryCodeEnum::from($value) : parent::assignMember($name, $value),
            'LocationIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->LocationIds = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
