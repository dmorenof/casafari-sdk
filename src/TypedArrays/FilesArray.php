<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\File;

/**
 * A specialized array class that enforces all its elements to be of type File.
 * Extends the TypedArray class to provide type-specific functionality.
 *
 * The $expected_type property is used internally to specify the required data type for elements.
 */
class FilesArray extends TypedArray
{
    protected string $expected_type = File::class;
}