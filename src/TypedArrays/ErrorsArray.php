<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\Error;

/**
 * A specialized array designed to store and manage instances of the Error class.
 * The type constraint ensures that only Error objects can be added to the array.
 */
class ErrorsArray extends TypedArray
{
    protected string $expected_type = Error::class;
}