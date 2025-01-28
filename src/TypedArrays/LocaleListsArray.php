<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\LocaleList;

class LocaleListsArray extends TypedArray
{
    protected string $expected_type = LocaleList::class;
}