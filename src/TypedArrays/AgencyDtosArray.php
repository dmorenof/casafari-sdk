<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\AgencyDto> */
class AgencyDtosArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\AgencyDto::class;
}
