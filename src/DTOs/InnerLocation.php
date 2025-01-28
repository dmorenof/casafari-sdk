<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

class InnerLocation extends DTO
{
    public string $RegionId;
    public string $CityId;
    public string $LocalityId;
    public string $Zonename;
}