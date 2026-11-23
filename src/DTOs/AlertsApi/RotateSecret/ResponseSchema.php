<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\RotateSecret;

/**
 * RotateSecretResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'secret',
];

    public string $secret;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'secret' => is_string($value) ? $this->secret = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
