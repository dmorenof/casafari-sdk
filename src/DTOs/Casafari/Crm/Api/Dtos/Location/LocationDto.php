<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location;

final class LocationDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $City;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $Country;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $Locality;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\IdValueModel $Region;

}
