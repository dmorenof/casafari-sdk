<?php

declare(strict_types=1);

namespace CasafariSDK\Collections\UserManagement\HTTPValidationError;

final class DetailCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\UserManagement\ValidationError::class;
}
