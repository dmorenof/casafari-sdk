<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class FeaturesV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'group',
    'names',
];

    /**
     * Name of the group of features.
     */
    public string $group;
    /**
     * List of feature names that belong to a specific group.
     */
    public \CasafariSDK\Collections\StringCollection $names;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'group' => is_string($value) ? $this->group = $value : parent::assignMember($name, $value),
            'names' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->names = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
