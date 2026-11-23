<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\RotateSecret;

/**
 * RotateSecretRequestSchema
 */
final class RequestSchema extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * When false (default), the previous secrets keep working for a 24-hour grace window so you can switch the new secret before the old one stops signing; deliveries carry a signature for each active secret meanwhile. When true, the previous secrets are revoked immediately and only the new one signs — use this only when a secret is compromised.
     */
    public bool $immediate;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'immediate' => is_bool($value) ? $this->immediate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
