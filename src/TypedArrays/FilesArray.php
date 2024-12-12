<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Entities\File;
use TypedArray\TypedArray;

class FilesArray extends TypedArray
{
    protected string $expected_type = File::class;
}