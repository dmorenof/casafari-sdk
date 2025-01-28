<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Enums\PortalEnum;

/**
 * PortalsArray is a specialized implementation of the TypedArray class.
 *
 * This class is tailored to only store elements of the type specified by the
 * expected_type property, which in this case is PortalEnum.
 * It ensures type-safety by enforcing that all elements added to the array
 * adhere to the given type constraint.
 */
class PortalEnumsArray extends TypedArray
{
    protected string $expected_type = PortalEnum::class;
}