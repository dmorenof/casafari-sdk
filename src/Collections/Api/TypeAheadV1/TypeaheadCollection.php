<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\Api\TypeAheadV1;

final class TypeaheadCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\Api\TypeAheadV1\TypeaheadDTO::class;
}
