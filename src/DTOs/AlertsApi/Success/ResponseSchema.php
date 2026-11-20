<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\Success;

/**
 * SuccessResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'success',
];

    public bool $success;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
