<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\LocationList;

class LocationListsArray extends TypedArray
{
    protected string $expected_type = LocationList::class;
}