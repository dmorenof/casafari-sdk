<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Enums\PortalEnum;
use TypedArray\TypedArray;

class PortalsArray extends TypedArray
{
    protected string $expected_type = PortalEnum::class;
}