<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\DTOs\LocaleList;
use TypedArray\TypedArray;

class LocaleListsArray extends TypedArray
{
    protected string $expected_type = LocaleList::class;
}