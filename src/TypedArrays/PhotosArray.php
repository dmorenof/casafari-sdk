<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\Photo;

/**
 * A specialized TypedArray implementation for handling collections of Photo objects.
 * This class ensures that all elements in the array are of the type Photo.
 */
class PhotosArray extends TypedArray
{
    protected string $expected_type = Photo::class;
}