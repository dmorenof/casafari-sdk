<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Entities\Photo;

class PhotosArray extends TypedArray
{
    protected string $expected_type = Photo::class;
}