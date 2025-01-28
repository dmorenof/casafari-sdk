<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\DetailsObject;

class DetailsObjectsArray extends TypedArray
{
    protected string $expected_type = DetailsObject::class;
}