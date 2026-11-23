<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem;

final class LocationDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'administrative_level',
    'location_id',
    'name',
];

    /**
     * Location administrative level.
     */
    public string $administrative_level;
    /**
     * ('Location ID, as returned by the [POST /api/v1/references/locations](/#operation/api__post__v1__references__locations) endpoint.',)
     */
    public int $location_id;
    /**
     * Location name.
     */
    public string $name;
    /**
     * The location zip codes.
     */
    public \CasafariSDK\Collections\StringCollection $zip_codes;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'administrative_level' => is_string($value) ? $this->administrative_level = $value : parent::assignMember($name, $value),
            'location_id' => is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'zip_codes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->zip_codes = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
