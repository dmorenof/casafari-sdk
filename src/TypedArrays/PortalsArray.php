<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Enums\PortalEnum;

class PortalsArray extends TypedArray
{
    protected string $expected_type = PortalEnum::class;
}