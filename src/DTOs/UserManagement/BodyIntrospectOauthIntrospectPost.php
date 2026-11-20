<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement;

/**
 * Body_introspect_oauth_introspect_post
 */
final class BodyIntrospectOauthIntrospectPost extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'client_id',
    'client_secret',
    'token',
];

    public string $client_id;
    public string $client_secret;
    public string $token;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_id' => is_string($value) ? $this->client_id = $value : parent::assignMember($name, $value),
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'token' => is_string($value) ? $this->token = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
