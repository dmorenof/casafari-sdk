<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
use CasafariSDK\TypedArrays\IntegersArray;
use CasafariSDK\TypedArrays\StringsArray;

class InnertLocations extends DTO
{
    public IntegersArray $RegionIds;
    public IntegersArray $CityIds;
    public IntegersArray $LocalityIds;
    public StringsArray $Zonenames;
}