<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\TypeAheadV1\TypeaheadItem;

final class BreadcrumbsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'location_id',
    'name',
];

    /**
     * Location ID.
     */
    public int $location_id;
    /**
     * The name of location.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'location_id' => is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
