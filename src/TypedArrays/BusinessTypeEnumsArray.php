<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Enums\BusinessTypeEnum;

class BusinessTypeEnumsArray extends TypedArray
{
    protected string $expected_type = BusinessTypeEnum::class;
}
