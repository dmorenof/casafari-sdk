<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2;

final class TransactionalDataDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'address',
    'bathrooms',
    'bedrooms',
    'cadastral_reference',
    'construction_year',
    'coordinates',
    'country_code',
    'currency',
    'id',
    'image_url',
    'location',
    'location_id',
    'locations_structure',
    'plot_area',
    'price',
    'price_per_sqm',
    'reference',
    'rooms',
    'sold_at',
    'source_annexes',
    'source_typology',
    'total_area',
    'type',
    'type_group',
    'with_mortgage',
];

    protected const array VALIDATION = [
    'image_url' => [
        'format' => 'uri',
        'pattern' => '^(?:[a-z0-9.+-]*)://(?:[^\\s:@/]+(?::[^\\s:@/]*)?@)?(?:(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)(?:\\.(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)){3}|\\[[0-9a-f:.]+\\]|([a-z¡-￿0-9](?:[a-z¡-￿0-9-]{0,61}[a-z¡-￿0-9])?(?:\\.(?!-)[a-z¡-￿0-9-]{1,63}(?<!-))*\\.(?!-)(?:[a-z¡-￿-]{2,63}|xn--[a-z0-9]{1,59})(?<!-)\\.?|localhost))(?::[0-9]{1,5})?(?:[/?#][^\\s]*)?\\z',
    ],
    'sold_at' => [
        'format' => 'date',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'distance',
];

    public ?string $address;
    public ?int $bathrooms;
    public ?int $bedrooms;
    public ?string $cadastral_reference;
    public ?int $construction_year;
    public \CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem\CoordinatesDTO $coordinates;
    public \CasafariSDK\Enums\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem\CountryCodeEnum $country_code;
    /**
     * Price currency code.
     */
    public ?string $currency;
    /**
     * Distance in kilometers from target point to the property. Not calculated for search by polygon.
     */
    public ?float $distance;
    public int $id;
    /**
     * Format: uri
     */
    public ?string $image_url {
        set {
            $this->assigning('image_url', $value);
            $this->image_url = $value;
        }
    }
    public \CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem\LocationDTO $location;
    public ?int $location_id;
    public \CasafariSDK\Collections\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem\LocationsStructureCollection $locations_structure;
    public ?float $plot_area;
    public ?float $price;
    public ?float $price_per_sqm;
    public ?string $reference;
    public ?int $rooms;
    /**
     * Format: date
     */
    public ?string $sold_at {
        set {
            $this->assigning('sold_at', $value);
            $this->sold_at = $value;
        }
    }
    /**
     * Additional raw source data (if present), describing annexes (such as parking, storage, etc) included in the transaction price.
     */
    public ?string $source_annexes;
    public ?string $source_typology;
    public ?float $total_area;
    public \CasafariSDK\Enums\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem\TypeEnum $type;
    public ?string $type_group;
    /**
     * Flag indicating whether the transaction was financed with a mortgage.
     */
    public ?bool $with_mortgage;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value === null || is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'bathrooms' => $value === null || is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'bedrooms' => $value === null || is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'cadastral_reference' => $value === null || is_string($value) ? $this->cadastral_reference = $value : parent::assignMember($name, $value),
            'construction_year' => $value === null || is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'country_code' => is_string($value) ? $this->country_code = \CasafariSDK\Enums\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem\CountryCodeEnum::from($value) : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'distance' => $value === null || is_float($value) ? $this->distance = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'image_url' => $value === null || is_string($value) ? $this->image_url = $value : parent::assignMember($name, $value),
            'location_id' => $value === null || is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'plot_area' => $value === null || is_float($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'price' => $value === null || is_float($value) ? $this->price = $value : parent::assignMember($name, $value),
            'price_per_sqm' => $value === null || is_float($value) ? $this->price_per_sqm = $value : parent::assignMember($name, $value),
            'reference' => $value === null || is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'rooms' => $value === null || is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sold_at' => $value === null || is_string($value) ? $this->sold_at = $value : parent::assignMember($name, $value),
            'source_annexes' => $value === null || is_string($value) ? $this->source_annexes = $value : parent::assignMember($name, $value),
            'source_typology' => $value === null || is_string($value) ? $this->source_typology = $value : parent::assignMember($name, $value),
            'total_area' => $value === null || is_float($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \CasafariSDK\Enums\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem\TypeEnum::from($value) : parent::assignMember($name, $value),
            'type_group' => $value === null || is_string($value) ? $this->type_group = $value : parent::assignMember($name, $value),
            'with_mortgage' => $value === null || is_bool($value) ? $this->with_mortgage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
