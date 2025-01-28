<?php

namespace CasafariSDK\TypedArrays;

use CasafariSDK\Core\TypedArray;
use CasafariSDK\DTOs\AgentLocale;

class AgentLocalesArray extends TypedArray
{
    protected string $expected_type = AgentLocale::class;
}