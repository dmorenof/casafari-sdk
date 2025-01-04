<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\Property;

class PropertiesArray extends TypedArray
{
    protected string $expected_type = Property::class;
}