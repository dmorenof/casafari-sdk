<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement;

/**
 * Body_authorize_post_oauth_authorize_post
 */
final class BodyAuthorizePostOauthAuthorizePost extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
    'password',
];

    public string $email;
    public string $password;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'password' => is_string($value) ? $this->password = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
