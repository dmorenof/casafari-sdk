<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\AgencyPhotoDto> */
class AgencyPhotoDtosArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\AgencyPhotoDto::class;
}
