<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\ListLeadsProperty> */
class ListLeadsPropertiesArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\ListLeadsProperty::class;
}
