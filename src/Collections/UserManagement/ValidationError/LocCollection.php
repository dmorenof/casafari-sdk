<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\UserManagement\ValidationError;

final class LocCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \CasafariSDK\DTOs\UserManagement\ValidationError\LocDTO::class;
}
