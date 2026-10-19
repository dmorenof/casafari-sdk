<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\UserPortalDto> */
class UserPortalDtosArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\UserPortalDto::class;
}
