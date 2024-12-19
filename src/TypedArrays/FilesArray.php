<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Entities\File;

class FilesArray extends TypedArray
{
    protected string $expected_type = File::class;
}