<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class AgenciesV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'agency_type',
    'name',
    'source_ids',
];

    /**
     * Type of the agency.
     */
    public string $agency_type;
    /**
     * Name of the agency.
     */
    public string $name;
    /**
     * List of source IDs that belongs to the agency.
     */
    public \CasafariSDK\Collections\IntegerCollection $source_ids;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agency_type' => is_string($value) ? $this->agency_type = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'source_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->source_ids = new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
