<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Enums\FeatureEnum;
use TypedArray\TypedArray;

class FeaturesArray extends TypedArray
{
    protected string $expected_type = FeatureEnum::class;
}