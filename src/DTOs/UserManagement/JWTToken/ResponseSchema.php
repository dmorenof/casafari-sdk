<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\JWTToken;

/**
 * JWTTokenResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'access_token',
    'refresh_token',
];

    public string $access_token;
    public string $refresh_token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'access_token' => is_string($value) ? $this->access_token = $value : parent::assignMember($name, $value),
            'refresh_token' => is_string($value) ? $this->refresh_token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
