<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class ConditionsV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conditions',
];

    /**
     * List of condition names.
     */
    public \CasafariSDK\Collections\StringCollection $conditions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conditions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->conditions = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
