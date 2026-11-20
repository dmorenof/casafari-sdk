<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi;

/**
 * CrmFeedsNotFoundSchema
 */
final class CrmFeedsNotFoundSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'detail',
    'feed_ids',
];

    public string $detail;
    public \CasafariSDK\Collections\StringCollection $feed_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detail' => is_string($value) ? $this->detail = $value : parent::assignMember($name, $value),
            'feed_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->feed_ids = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
