<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location;

final class LocationDto extends \Dmorenof\SdkRuntime\DTO
{
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $City;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $Country;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $Locality;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $Region;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'City' => $value instanceof \stdClass ? $this->City = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel($value) : parent::assignMember($name, $value),
            'Country' => $value instanceof \stdClass ? $this->Country = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel($value) : parent::assignMember($name, $value),
            'Locality' => $value instanceof \stdClass ? $this->Locality = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel($value) : parent::assignMember($name, $value),
            'Region' => $value instanceof \stdClass ? $this->Region = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
