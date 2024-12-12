<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Entities\Error;
use TypedArray\TypedArray;

class ErrorsArray extends TypedArray
{
    protected string $expected_type = Error::class;
}