<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Entities\Property;
use TypedArray\TypedArray;

class PropertiesArray extends TypedArray
{
    protected string $expected_type = Property::class;
}