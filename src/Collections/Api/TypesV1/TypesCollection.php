<?php

declare(strict_types=1);

namespace CasafariSDK\Collections\Api\TypesV1;

final class TypesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\Api\TypesV1\TypesDTO::class;
}
