<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Entities\Locale;
use TypedArray\TypedArray;

class LocalesArray extends TypedArray
{
    protected string $expected_type = Locale::class;
}