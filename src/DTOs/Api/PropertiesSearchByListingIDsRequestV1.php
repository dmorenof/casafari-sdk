<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class PropertiesSearchByListingIDsRequestV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'listing_ids',
];

    protected const array VALIDATION = [
    'listing_ids' => [
        'maxItems' => 100,
    ],
];

    /**
     * List of listing IDs.
     */
    public \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\ListingIdsCollection $listing_ids {
        set {
            $this->assigning('listing_ids', $value);
            $this->listing_ids = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'listing_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->listing_ids = new \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\ListingIdsCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
