<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\PropertyList;

class PropertyListArray extends TypedArray
{
    protected string $expected_type = PropertyList::class;
}