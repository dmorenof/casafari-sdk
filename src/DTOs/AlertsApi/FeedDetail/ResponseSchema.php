<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\FeedDetail;

/**
 * FeedDetailResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'feed_id',
    'feed_name',
    'filters',
];

    public int $feed_id;
    public string $feed_name;
    public \CasafariSDK\DTOs\AlertsApi\AlertFeedFiltersSchema $filters;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'feed_id' => is_int($value) ? $this->feed_id = $value : parent::assignMember($name, $value),
            'feed_name' => is_string($value) ? $this->feed_name = $value : parent::assignMember($name, $value),
            'filters' => $value instanceof \stdClass ? $this->filters = new \CasafariSDK\DTOs\AlertsApi\AlertFeedFiltersSchema($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
