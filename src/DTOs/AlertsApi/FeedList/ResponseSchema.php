<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi\FeedList;

/**
 * FeedListResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'feeds',
];

    public \CasafariSDK\Collections\AlertsApi\FeedList\ResponseSchema\FeedsCollection $feeds;
    public ?string $next_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'feeds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->feeds = new \CasafariSDK\Collections\AlertsApi\FeedList\ResponseSchema\FeedsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\AlertsApi\FeedSummarySchema::class)) : parent::assignMember($name, $value),
            'next_url' => $value === null || is_string($value) ? $this->next_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
