<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Enums\PropertyTypeIdEnum;

class PropertyTypeIdEnumsArray extends TypedArray
{
    protected string $expected_type = PropertyTypeIdEnum::class;
}