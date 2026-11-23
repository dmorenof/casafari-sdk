<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\SetWebhook;

/**
 * SetWebhookResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'secret',
    'url',
];

    public ?string $secret;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'secret' => $value === null || is_string($value) ? $this->secret = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
