<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\EntityFileDto> */
class EntityFileDtosArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\EntityFileDto::class;
}
