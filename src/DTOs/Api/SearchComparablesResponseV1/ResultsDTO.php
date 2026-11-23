<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchComparablesResponseV1;

final class ResultsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'address',
    'bathrooms',
    'bedrooms',
    'condition',
    'construction_year',
    'coordinates',
    'description',
    'features',
    'floor_number',
    'gross_yield',
    'is_private_property',
    'last_rent_price_reduction',
    'last_sale_price_reduction',
    'listing_urls',
    'living_area',
    'location',
    'locations_structure',
    'operations',
    'plot_area',
    'primary_listing_id',
    'property_id',
    'rent_currency',
    'rent_period',
    'rent_price',
    'rent_price_base',
    'rent_price_last_change',
    'rent_price_per_sqm',
    'rent_price_per_sqm_base',
    'rent_status',
    'rented_at',
    'rooms',
    'sale_currency',
    'sale_price',
    'sale_price_base',
    'sale_price_last_change',
    'sale_price_per_sqm',
    'sale_price_per_sqm_base',
    'sale_status',
    'sold_at',
    'terrace_area',
    'title',
    'total_area',
    'total_rent_price_change',
    'total_sale_price_change',
    'type',
    'type_group',
    'zip_code',
];

    protected const array READ_ONLY_FIELDS = [
    'distance',
    'pictures',
    'property_url',
    'rent_active_listings_count',
    'rent_time_on_market',
    'sale_active_listings_count',
    'sale_time_on_market',
    'similarity_score',
    'thumbnails',
];

    /**
     * Property address.
     */
    public string $address;
    /**
     * Number of bathrooms.
     */
    public int $bathrooms;
    /**
     * Number of bedrooms.
     */
    public ?int $bedrooms;
    /**
     * Property condition, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\ConditionEnum $condition;
    /**
     * Construction year.
     */
    public int $construction_year;
    /**
     * Property coordinates.
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem\CoordinatesDTO $coordinates;
    /**
     * Property description.
     */
    public string $description;
    /**
     * Distance in kilometers from target point to the property. Not calculated for search by polygon.
     */
    public ?float $distance;
    /**
     * Energy certificate classification that attests to the energy efficiency of a property. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `energy_rating` field instead.</strong>
     */
    public string $energy_certificate;
    /**
     * Energy rating that attests to the energy efficiency of a property.
     */
    public string $energy_rating;
    /**
     * Property features, as returned by the [GET /api/v1/references/features](/#operation/api__get__v1__references__features) endpoint.
     */
    public \CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem\FeaturesDTO $features;
    /**
     * Exact floor number. Negative values indicate underground floors (e.g. basements).
     */
    public ?int $floor_number;
    /**
     * Gross yield in percentage.
     */
    public float $gross_yield;
    /**
     * Whether the property taken from DVF.
     */
    public bool $is_dvf;
    /**
     * Whether the property is considered an outlier based on its price.
     */
    public bool $is_outlier;
    /**
     * Whether the property is listed by a private individual, as opposed to an agent or a professional.
     */
    public bool $is_private_property;
    /**
     * Last rent price reduction in percents.
     */
    public float $last_rent_price_reduction;
    /**
     * Last sale price reduction in percents.
     */
    public float $last_sale_price_reduction;
    /**
     * Listing urls of the comparable.
     */
    public \CasafariSDK\Collections\StringCollection $listing_urls;
    /**
     * Living area.
     */
    public int $living_area;
    /**
     * Information about property location.
     */
    public \CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem\LocationDTO $location;
    /**
     * Information about all the parent locations (including property location) up to the country.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesResponseV1\ResultsItem\LocationsStructureCollection $locations_structure;
    /**
     * Operation types for which property is available.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesResponseV1\ResultsItem\OperationsCollection $operations;
    /**
     * List of the original picture image URLs.
     */
    public \CasafariSDK\Collections\StringCollection $pictures;
    /**
     * Plot area.
     */
    public int $plot_area;
    /**
     * Primary listing (ad) ID of the property which is defined after the matching into property.
     */
    public int $primary_listing_id;
    /**
     * ID of the property.
     */
    public int $property_id;
    /**
     * URL of the property in the CASAFARI website.
     */
    public ?string $property_url;
    /**
     * Number of active listings for this property on the rental market.
     */
    public int $rent_active_listings_count;
    /**
     * Rent price currency code.
     */
    public string $rent_currency;
    /**
     * Rent period.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\RentPeriodEnum $rent_period;
    /**
     * Rent price, in the currency of the listings (specified by the `rent_currency` field).
     */
    public int $rent_price;
    /**
     * Rent price, in Euros.
     */
    public int $rent_price_base;
    /**
     * Information about the last change of rent price.
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem\LastChangeDTO $rent_price_last_change;
    /**
     * Rent price per square meter, in the currency of the listings (specified by the `rent_currency` field).
     */
    public float $rent_price_per_sqm;
    /**
     * ('Rent price per square meter, in Euros.',)
     */
    public float $rent_price_per_sqm_base;
    /**
     * Rent status.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\RentStatusEnum $rent_status;
    /**
     * Information about the property last activity on the rental market.
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem\OnMarketDTO $rent_time_on_market;
    /**
     * Date when the property was rented.
     * Format: date
     */
    public ?string $rented_at;
    /**
     * Number of rooms.
     */
    public int $rooms;
    /**
     * Number of active listings for this property on the sales market.
     */
    public int $sale_active_listings_count;
    /**
     * Sale price currency code.
     */
    public string $sale_currency;
    /**
     * Sale price, in the currency of the listings (specified by the `sale_currency` field).
     */
    public int $sale_price;
    /**
     * Sale price, in Euros.
     */
    public int $sale_price_base;
    /**
     * Information about the last change of sale price.
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem\SalePriceLastChange\LastChangeDTO $sale_price_last_change;
    /**
     * Sale price per square meter, in the currency of the listings (specified by the `sale_currency` field).
     */
    public float $sale_price_per_sqm;
    /**
     * ('Sale price per square meter, in Euros.',)
     */
    public float $sale_price_per_sqm_base;
    /**
     * Sale status.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\SaleStatusEnum $sale_status;
    /**
     * Information about the property last activity on the sales market.
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem\SaleTimeOnMarket\OnMarketDTO $sale_time_on_market;
    /**
     * Similarity score of the property. Value between 0 and 1. Indicates how property parameters are close to the requested ones.
     */
    public float $similarity_score;
    /**
     * Date when the property was sold.
     * Format: date
     */
    public ?string $sold_at;
    /**
     * Terrace area.
     */
    public int $terrace_area;
    /**
     * List of the thumbnail image URLs.
     */
    public \CasafariSDK\Collections\StringCollection $thumbnails;
    /**
     * Property title.
     */
    public string $title;
    /**
     * Total area.
     */
    public int $total_area;
    /**
     * Total rent price change in percents.
     */
    public float $total_rent_price_change;
    /**
     * Total sale price change in percents.
     */
    public float $total_sale_price_change;
    /**
     * Property type, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\TypeEnum $type;
    /**
     * Property type group, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\TypeGroupEnum $type_group;
    /**
     * The location zip code.
     */
    public ?string $zip_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'bathrooms' => is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'bedrooms' => $value === null || is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'condition' => is_string($value) ? $this->condition = \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\ConditionEnum::from($value) : parent::assignMember($name, $value),
            'construction_year' => is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'distance' => $value === null || is_float($value) ? $this->distance = $value : parent::assignMember($name, $value),
            'energy_certificate' => is_string($value) ? $this->energy_certificate = $value : parent::assignMember($name, $value),
            'energy_rating' => is_string($value) ? $this->energy_rating = $value : parent::assignMember($name, $value),
            'floor_number' => $value === null || is_int($value) ? $this->floor_number = $value : parent::assignMember($name, $value),
            'gross_yield' => is_float($value) ? $this->gross_yield = $value : parent::assignMember($name, $value),
            'is_dvf' => is_bool($value) ? $this->is_dvf = $value : parent::assignMember($name, $value),
            'is_outlier' => is_bool($value) ? $this->is_outlier = $value : parent::assignMember($name, $value),
            'is_private_property' => is_bool($value) ? $this->is_private_property = $value : parent::assignMember($name, $value),
            'last_rent_price_reduction' => is_float($value) ? $this->last_rent_price_reduction = $value : parent::assignMember($name, $value),
            'last_sale_price_reduction' => is_float($value) ? $this->last_sale_price_reduction = $value : parent::assignMember($name, $value),
            'listing_urls' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->listing_urls = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'living_area' => is_int($value) ? $this->living_area = $value : parent::assignMember($name, $value),
            'pictures' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pictures = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'plot_area' => is_int($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'primary_listing_id' => is_int($value) ? $this->primary_listing_id = $value : parent::assignMember($name, $value),
            'property_id' => is_int($value) ? $this->property_id = $value : parent::assignMember($name, $value),
            'property_url' => $value === null || is_string($value) ? $this->property_url = $value : parent::assignMember($name, $value),
            'rent_active_listings_count' => is_int($value) ? $this->rent_active_listings_count = $value : parent::assignMember($name, $value),
            'rent_currency' => is_string($value) ? $this->rent_currency = $value : parent::assignMember($name, $value),
            'rent_period' => is_string($value) ? $this->rent_period = \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\RentPeriodEnum::from($value) : parent::assignMember($name, $value),
            'rent_price' => is_int($value) ? $this->rent_price = $value : parent::assignMember($name, $value),
            'rent_price_base' => is_int($value) ? $this->rent_price_base = $value : parent::assignMember($name, $value),
            'rent_price_per_sqm' => is_float($value) ? $this->rent_price_per_sqm = $value : parent::assignMember($name, $value),
            'rent_price_per_sqm_base' => is_float($value) ? $this->rent_price_per_sqm_base = $value : parent::assignMember($name, $value),
            'rent_status' => is_string($value) ? $this->rent_status = \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\RentStatusEnum::from($value) : parent::assignMember($name, $value),
            'rented_at' => $value === null || is_string($value) ? $this->rented_at = $value : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sale_active_listings_count' => is_int($value) ? $this->sale_active_listings_count = $value : parent::assignMember($name, $value),
            'sale_currency' => is_string($value) ? $this->sale_currency = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            'sale_price_base' => is_int($value) ? $this->sale_price_base = $value : parent::assignMember($name, $value),
            'sale_price_per_sqm' => is_float($value) ? $this->sale_price_per_sqm = $value : parent::assignMember($name, $value),
            'sale_price_per_sqm_base' => is_float($value) ? $this->sale_price_per_sqm_base = $value : parent::assignMember($name, $value),
            'sale_status' => is_string($value) ? $this->sale_status = \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\SaleStatusEnum::from($value) : parent::assignMember($name, $value),
            'similarity_score' => is_float($value) ? $this->similarity_score = $value : parent::assignMember($name, $value),
            'sold_at' => $value === null || is_string($value) ? $this->sold_at = $value : parent::assignMember($name, $value),
            'terrace_area' => is_int($value) ? $this->terrace_area = $value : parent::assignMember($name, $value),
            'thumbnails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->thumbnails = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'total_area' => is_int($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'total_rent_price_change' => is_float($value) ? $this->total_rent_price_change = $value : parent::assignMember($name, $value),
            'total_sale_price_change' => is_float($value) ? $this->total_sale_price_change = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\TypeEnum::from($value) : parent::assignMember($name, $value),
            'type_group' => is_string($value) ? $this->type_group = \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\TypeGroupEnum::from($value) : parent::assignMember($name, $value),
            'zip_code' => $value === null || is_string($value) ? $this->zip_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
