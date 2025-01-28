<?php

namespace CasafariSDK\Requests;

use CasafariSDK\Core\Request;
use CasafariSDK\Enums\CountryEnum;

class PropertyLocationRequest extends Request
{
    public CountryEnum $CountryCode;
    public int $ParentId;
    public int $ActiveType;
    public int $Level;
}