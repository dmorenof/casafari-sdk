<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class PropertiesSearchByListingIDsResponseV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'listing_ids',
    'property_id',
];

    /**
     * List of listing IDs.
     */
    public \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\LocationIdsCollection $listing_ids;
    /**
     * ID of the property.
     */
    public int $property_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'listing_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->listing_ids = new \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\LocationIdsCollection($value) : parent::assignMember($name, $value),
            'property_id' => is_int($value) ? $this->property_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
