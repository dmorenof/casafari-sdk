<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\Enums\FeatureEnum;

/**
 * Represents a typed array specifically for handling elements of type FeatureEnum.
 * Ensures that all elements added to the array conform to the expected FeatureEnum type.
 */
class FeaturesArray extends TypedArray
{
    protected string $expected_type = FeatureEnum::class;
}