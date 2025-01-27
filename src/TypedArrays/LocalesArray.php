<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\Locale;

/**
 * Represents an array specifically designed to hold objects of the type `Locale`.
 *
 * Extends the functionality of `TypedArray` while enforcing that all elements
 * within the array must be instances of the `Locale` class.
 *
 * This ensures type safety when manipulating collections of `Locale` objects.
 */
class LocalesArray extends TypedArray
{
    protected string $expected_type = Locale::class;
}