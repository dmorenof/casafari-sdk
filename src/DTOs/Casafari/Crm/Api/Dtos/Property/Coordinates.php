<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class Coordinates extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    public string $latitude;
    public string $longitude;
    public bool $visible;

}
