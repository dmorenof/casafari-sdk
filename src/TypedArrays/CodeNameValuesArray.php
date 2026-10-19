<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\CodeNameValue> */
class CodeNameValuesArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\CodeNameValue::class;
}
