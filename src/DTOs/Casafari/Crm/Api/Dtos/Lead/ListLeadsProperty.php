<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsProperty extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    public string $Address;
    public string $Comission;
    public string $ComissionPercentage;
    public string $GrossArea;
    public string $LandArea;
    public string $LastUpdate;
    public string $Price;
    public string $PropertyID;
    public string $Reference;
    public string $SurfaceArea;

}
