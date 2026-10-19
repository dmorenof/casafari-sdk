<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\EntityDto> */
class EntityDtosArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\EntityDto::class;
}
