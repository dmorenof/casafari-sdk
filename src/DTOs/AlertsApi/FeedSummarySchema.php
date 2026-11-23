<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi;

/**
 * FeedSummarySchema
 */
final class FeedSummarySchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'created_at',
    'feed_name',
    'id',
    'updated_at',
];

    /**
     * Format: date-time
     */
    public string $created_at;
    public string $feed_name;
    public int $id;
    /**
     * Format: date-time
     */
    public string $updated_at;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'feed_name' => is_string($value) ? $this->feed_name = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
