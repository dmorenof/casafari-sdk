<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Enums\FeatureEnum;

class FeaturesArray extends TypedArray
{
    protected string $expected_type = FeatureEnum::class;
}