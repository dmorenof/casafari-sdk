<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\Details;

/**
 * DetailsResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'details',
];

    public string $details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'details' => is_string($value) ? $this->details = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
