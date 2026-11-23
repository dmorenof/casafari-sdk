<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class AgentsV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'agents',
];

    /**
     * The list of suggested agents.
     */
    public \CasafariSDK\Collections\StringCollection $agents;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->agents = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
