<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\ClientRegistration;

/**
 * ClientRegistrationRequest
 *
 * RFC 7591 Dynamic Client Registration request (public MCP connectors: Claude/ChatGPT/custom).
 *
 * Semantic validation (allowed grant types, redirect-uri safety) lives in the registration service so it can
 * return RFC 7591 error codes; this model only captures the metadata fields and their structural defaults.
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'client_name' => [
        'maxLength' => 150,
    ],
];

    public ?string $client_name {
        set {
            $this->assigning('client_name', $value);
            $this->client_name = $value;
        }
    }
    public \CasafariSDK\Collections\StringCollection $grant_types;
    public \CasafariSDK\Collections\StringCollection $redirect_uris;
    public \CasafariSDK\Collections\StringCollection $response_types;
    public string $token_endpoint_auth_method;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'client_name' => $value === null || is_string($value) ? $this->client_name = $value : parent::assignMember($name, $value),
            'grant_types' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->grant_types = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'redirect_uris' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->redirect_uris = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'response_types' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->response_types = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'token_endpoint_auth_method' => is_string($value) ? $this->token_endpoint_auth_method = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
