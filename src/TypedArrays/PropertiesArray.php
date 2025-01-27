<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\Property;

/**
 * Represents a specialized array designed to hold instances of the Property class.
 *
 * Enforces type safety by ensuring only objects of the specified expected type (Property)
 * can be added to the array.
 */
class PropertiesArray extends TypedArray
{
    protected string $expected_type = Property::class;
}