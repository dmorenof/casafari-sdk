<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\JWTRefreshToken;

/**
 * JWTRefreshTokenResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'access_token',
];

    public string $access_token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_token' => is_string($value) ? $this->access_token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
