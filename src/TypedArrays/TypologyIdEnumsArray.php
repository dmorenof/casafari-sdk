<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Enums\TypologyIdEnum;

/**
 * Represents an array specifically containing instances of TypologyIdEnum.
 * Ensures that all elements in the array are of the expected type.
 */
class TypologyIdEnumsArray extends TypedArray
{
    protected string $expected_type = TypologyIdEnum::class;
}