<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchComparablesResponseV2;

final class DvfResultsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'address',
    'bedrooms',
    'coordinates',
    'dvf_reference',
    'location',
    'locations_structure',
    'plot_area',
    'rooms',
    'sale_price',
    'sale_price_base',
    'total_area',
    'type',
    'type_group',
];

    protected const array READ_ONLY_FIELDS = [
    'distance',
    'sold_at',
    'thumbnails',
];

    /**
     * Property address.
     */
    public string $address;
    /**
     * Number of bedrooms.
     */
    public int $bedrooms;
    /**
     * DVF property coordinates.
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV2\DvfResultsItem\CoordinatesDTO $coordinates;
    /**
     * Distance in kilometers from target point to DVF the property. Not calculated for search by polygon.
     */
    public float $distance;
    /**
     * Reference ID of the DVF property.
     */
    public int $dvf_reference;
    /**
     * Information about DVF property location.
     */
    public \CasafariSDK\DTOs\Api\SearchComparablesResponseV2\DvfResultsItem\LocationDTO $location;
    /**
     * Information about all the parent locations (including DVF property location) up to the country.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesResponseV2\DvfResultsItem\LocationsStructureCollection $locations_structure;
    /**
     * Plot area.
     */
    public int $plot_area;
    /**
     * Number of rooms.
     */
    public int $rooms;
    /**
     * Sale price, in the original currency.
     */
    public int $sale_price;
    /**
     * Sale price, in Euros.
     */
    public int $sale_price_base;
    /**
     * Sale price per square meter, in the original currency.
     */
    public float $sale_price_psqm;
    /**
     * Sale price per square meter, in Euros.
     */
    public float $sale_price_psqm_base;
    /**
     * Sale status.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV2\DvfResultsItem\SaleStatusEnum $sale_status;
    /**
     * Date when the property was sold.
     */
    public ?string $sold_at;
    /**
     * List of the thumbnail image URLs.
     */
    public \CasafariSDK\Collections\StringCollection $thumbnails;
    /**
     * Total area.
     */
    public int $total_area;
    /**
     * Property type, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV2\DvfResultsItem\TypeEnum $type;
    /**
     * Property type group, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV2\DvfResultsItem\TypeGroupEnum $type_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'bedrooms' => is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'distance' => is_float($value) ? $this->distance = $value : parent::assignMember($name, $value),
            'dvf_reference' => is_int($value) ? $this->dvf_reference = $value : parent::assignMember($name, $value),
            'plot_area' => is_int($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            'sale_price_base' => is_int($value) ? $this->sale_price_base = $value : parent::assignMember($name, $value),
            'sale_price_psqm' => is_float($value) ? $this->sale_price_psqm = $value : parent::assignMember($name, $value),
            'sale_price_psqm_base' => is_float($value) ? $this->sale_price_psqm_base = $value : parent::assignMember($name, $value),
            'sale_status' => is_string($value) ? $this->sale_status = \CasafariSDK\Enums\Api\SearchComparablesResponseV2\DvfResultsItem\SaleStatusEnum::from($value) : parent::assignMember($name, $value),
            'sold_at' => $value === null || is_string($value) ? $this->sold_at = $value : parent::assignMember($name, $value),
            'thumbnails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->thumbnails = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'total_area' => is_int($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \CasafariSDK\Enums\Api\SearchComparablesResponseV2\DvfResultsItem\TypeEnum::from($value) : parent::assignMember($name, $value),
            'type_group' => is_string($value) ? $this->type_group = \CasafariSDK\Enums\Api\SearchComparablesResponseV2\DvfResultsItem\TypeGroupEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
