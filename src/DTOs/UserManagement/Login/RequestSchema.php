<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\Login;

/**
 * LoginRequestSchema
 */
final class RequestSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
    'password',
];

    protected const array VALIDATION = [
    'password' => [
        'minLength' => 1,
    ],
];

    public string $email;
    public string $password {
        set {
            $this->assigning('password', $value);
            $this->password = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
