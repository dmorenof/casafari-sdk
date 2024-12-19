<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Entities\Locale;

class LocalesArray extends TypedArray
{
    protected string $expected_type = Locale::class;
}