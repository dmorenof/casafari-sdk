<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi;

/**
 * ErrorDetailSchema
 */
final class ErrorDetailSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'detail',
];

    public string $detail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detail' => is_string($value) ? $this->detail = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
