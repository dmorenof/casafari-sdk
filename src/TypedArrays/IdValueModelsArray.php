<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;

/** @extends TypedArray<\CasafariSDK\DTOs\IdValueModel> */
class IdValueModelsArray extends TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\IdValueModel::class;
}
