<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\Photo;

class PhotosArray extends TypedArray
{
    protected string $expected_type = Photo::class;
}