<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class SourcesV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'domains',
];

    /**
     * The domain urls.
     */
    public \CasafariSDK\Collections\StringCollection $domains;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domains' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->domains = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
