<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\LocationListRequest;

class LocationListRequestsArray extends TypedArray
{
    protected string $expected_type = LocationListRequest::class;
}