<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\SetWebhook;

/**
 * SetWebhookRequestSchema
 */
final class RequestSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'url',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
        'maxLength' => 2083,
        'format' => 'uri',
    ],
];

    /**
     * Format: uri
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
