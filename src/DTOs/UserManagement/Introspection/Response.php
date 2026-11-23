<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\Introspection;

/**
 * IntrospectionResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'active',
];

    public bool $active;
    public ?\CasafariSDK\Collections\IntegerCollection $allowed_locations;
    public ?string $aud;
    public ?string $client_id;
    public ?\CasafariSDK\Collections\IntegerCollection $country_ids;
    public ?int $exp;
    public ?\CasafariSDK\Collections\StringCollection $mcp_tools;
    public ?string $scope;
    public ?string $sub;
    public ?string $token_type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'allowed_locations' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->allowed_locations = $value === null ? null : new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'aud' => $value === null || is_string($value) ? $this->aud = $value : parent::assignMember($name, $value),
            'client_id' => $value === null || is_string($value) ? $this->client_id = $value : parent::assignMember($name, $value),
            'country_ids' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->country_ids = $value === null ? null : new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'exp' => $value === null || is_int($value) ? $this->exp = $value : parent::assignMember($name, $value),
            'mcp_tools' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->mcp_tools = $value === null ? null : new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'scope' => $value === null || is_string($value) ? $this->scope = $value : parent::assignMember($name, $value),
            'sub' => $value === null || is_string($value) ? $this->sub = $value : parent::assignMember($name, $value),
            'token_type' => $value === null || is_string($value) ? $this->token_type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
