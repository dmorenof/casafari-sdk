<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\EntitiesLocaleDto> */
class EntitiesLocaleDtosArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\EntitiesLocaleDto::class;
}
