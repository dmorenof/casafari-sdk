<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\CrmFeedIds;

/**
 * CrmFeedIdsRequestSchema
 */
final class RequestSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'feed_ids',
];

    protected const array VALIDATION = [
    'feed_ids' => [
        'minItems' => 1,
        'maxItems' => 100,
    ],
];

    public \CasafariSDK\Collections\StringCollection $feed_ids {
        set {
            $this->assigning('feed_ids', $value);
            $this->feed_ids = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'feed_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->feed_ids = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
