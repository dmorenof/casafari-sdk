<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi;

/**
 * HTTPValidationError
 */
final class HTTPValidationError extends \Dmorenof\SdkRuntime\DTO
{
    public \CasafariSDK\Collections\AlertsApi\HTTPValidationError\DetailCollection $detail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detail' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->detail = new \CasafariSDK\Collections\AlertsApi\HTTPValidationError\DetailCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\AlertsApi\ValidationError::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
