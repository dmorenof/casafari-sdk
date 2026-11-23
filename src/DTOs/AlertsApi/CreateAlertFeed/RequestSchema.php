<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\CreateAlertFeed;

/**
 * CreateAlertFeedRequestSchema
 */
final class RequestSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'feed_name',
    'filters',
];

    protected const array VALIDATION = [
    'feed_name' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
];

    public string $feed_name {
        set {
            $this->assigning('feed_name', $value);
            $this->feed_name = $value;
        }
    }
    public \CasafariSDK\DTOs\AlertsApi\AlertFeedFiltersSchema $filters;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'feed_name' => is_string($value) ? $this->feed_name = $value : parent::assignMember($name, $value),
            'filters' => $value instanceof \stdClass ? $this->filters = new \CasafariSDK\DTOs\AlertsApi\AlertFeedFiltersSchema($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
