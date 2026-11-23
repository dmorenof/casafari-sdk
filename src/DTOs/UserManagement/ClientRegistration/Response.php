<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\ClientRegistration;

/**
 * ClientRegistrationResponse
 *
 * RFC 7591 §3.2.1 client information response. `client_secret`/`client_secret_expires_at` appear only for
 * confidential clients; public clients omit them (serialized with exclude_none by the route).
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'client_id',
    'client_id_issued_at',
    'grant_types',
    'redirect_uris',
    'response_types',
    'token_endpoint_auth_method',
];

    public string $client_id;
    public int $client_id_issued_at;
    public ?string $client_name;
    public ?string $client_secret;
    public ?int $client_secret_expires_at;
    public \CasafariSDK\Collections\StringCollection $grant_types;
    public \CasafariSDK\Collections\StringCollection $redirect_uris;
    public \CasafariSDK\Collections\StringCollection $response_types;
    public string $token_endpoint_auth_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_id' => is_string($value) ? $this->client_id = $value : parent::assignMember($name, $value),
            'client_id_issued_at' => is_int($value) ? $this->client_id_issued_at = $value : parent::assignMember($name, $value),
            'client_name' => $value === null || is_string($value) ? $this->client_name = $value : parent::assignMember($name, $value),
            'client_secret' => $value === null || is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'client_secret_expires_at' => $value === null || is_int($value) ? $this->client_secret_expires_at = $value : parent::assignMember($name, $value),
            'grant_types' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->grant_types = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'redirect_uris' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->redirect_uris = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'response_types' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->response_types = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'token_endpoint_auth_method' => is_string($value) ? $this->token_endpoint_auth_method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
