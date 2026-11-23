<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class ReferenceLocationV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'administrative_level',
    'location_id',
    'locations_structure',
    'name',
    'parent_id',
];

    /**
     * Location administrative level.
     */
    public string $administrative_level;
    /**
     * ID of the location.
     */
    public int $location_id;
    /**
     * Information about all the parent locations, starting from the top-most level - country.
     */
    public \CasafariSDK\Collections\Api\ReferenceLocationV1\LocationsStructureCollection $locations_structure;
    /**
     * Name of the location.
     */
    public string $name;
    /**
     * ID of the parent level location.
     */
    public int $parent_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'administrative_level' => is_string($value) ? $this->administrative_level = $value : parent::assignMember($name, $value),
            'location_id' => is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'parent_id' => is_int($value) ? $this->parent_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
