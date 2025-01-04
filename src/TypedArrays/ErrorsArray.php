<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\Error;

class ErrorsArray extends TypedArray
{
    protected string $expected_type = Error::class;
}