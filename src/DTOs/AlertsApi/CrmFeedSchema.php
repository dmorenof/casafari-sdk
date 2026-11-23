<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi;

/**
 * CrmFeedSchema
 */
final class CrmFeedSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'feed_id',
    'feed_name',
    'feed_status',
    'user_email',
    'user_id',
];

    public string $feed_id;
    public ?string $feed_name;
    public \CasafariSDK\Enums\AlertsApi\FeedStatusEnum $feed_status;
    public string $user_email;
    public string $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'feed_id' => is_string($value) ? $this->feed_id = $value : parent::assignMember($name, $value),
            'feed_name' => $value === null || is_string($value) ? $this->feed_name = $value : parent::assignMember($name, $value),
            'feed_status' => is_string($value) ? $this->feed_status = \CasafariSDK\Enums\AlertsApi\FeedStatusEnum::from($value) : parent::assignMember($name, $value),
            'user_email' => is_string($value) ? $this->user_email = $value : parent::assignMember($name, $value),
            'user_id' => is_string($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
