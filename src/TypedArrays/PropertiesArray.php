<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Entities\Property;

class PropertiesArray extends TypedArray
{
    protected string $expected_type = Property::class;
}