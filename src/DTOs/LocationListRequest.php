<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
use CasafariSDK\Enums\CountryEnum;
use CasafariSDK\TypedArrays\IntegersArray;

class LocationListRequest extends DTO
{
    public CountryEnum $CountryCode;
    public IntegersArray $LocationIds;
}