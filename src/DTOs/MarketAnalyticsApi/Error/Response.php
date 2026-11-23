<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\Error;

/**
 * ErrorResponse
 *
 * Represent error response schema.
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'message',
];

    public ?string $details;
    public ?\CasafariSDK\Collections\StringCollection $errors;
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'details' => $value === null || is_string($value) ? $this->details = $value : parent::assignMember($name, $value),
            'errors' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->errors = $value === null ? null : new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
