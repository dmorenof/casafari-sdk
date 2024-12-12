<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Entities\Photo;
use TypedArray\TypedArray;

class PhotosArray extends TypedArray
{
    protected string $expected_type = Photo::class;
}