<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class PropertyDetailResponseV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'address',
    'bathrooms',
    'bedrooms',
    'casafari_connect',
    'ceiling_label',
    'changed_at',
    'condition',
    'construction_year',
    'coordinates',
    'description',
    'energy_certificate',
    'energy_rating',
    'features',
    'floor_number',
    'gross_yield',
    'is_auction_property',
    'is_bank_property',
    'is_private_property',
    'listings',
    'living_area',
    'location',
    'locations_structure',
    'min_rent_area',
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
    'rent_time_on_market',
    'rooms',
    'sale_currency',
    'sale_price',
    'sale_price_base',
    'sale_price_last_change',
    'sale_price_per_sqm',
    'sale_price_per_sqm_base',
    'sale_status',
    'sale_time_on_market',
    'terrace_area',
    'title',
    'total_area',
    'type',
    'type_group',
    'zip_code',
];

    protected const array VALIDATION = [
    'changed_at' => [
        'format' => 'date',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'distance',
    'pictures',
    'property_url',
    'ref_numbers',
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
     * Whether the company is connected to Casafari Connect.
     */
    public ?bool $casafari_connect;
    /**
     * Ceiling height in meters.<br><span style="color:red">Available only for Germany.</span>
     */
    public ?string $ceiling_label;
    /**
     * The date and time when the property was last updated.
     * Format: date
     */
    public string $changed_at {
        set {
            $this->assigning('changed_at', $value);
            $this->changed_at = $value;
        }
    }
    /**
     * Property condition, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public \CasafariSDK\Enums\Api\PropertyDetailResponseV1\ConditionEnum $condition;
    /**
     * Construction year.
     */
    public int $construction_year;
    /**
     * Property coordinates.
     */
    public ?\CasafariSDK\DTOs\Api\PropertyDetailResponseV1\CoordinatesDTO $coordinates;
    /**
     * Property description.
     */
    public string $description;
    /**
     * Distance in kilometers from target point to the property.Available only when the `custom_location_boundary.circle` field is defined in the request.
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
    public \CasafariSDK\DTOs\Api\PropertyDetailResponseV1\FeaturesDTO $features;
    /**
     * Exact floor number. Negative values indicate underground floors (e.g. basements).
     */
    public ?int $floor_number;
    /**
     * Gross yield in percentage.
     */
    public float $gross_yield;
    /**
     * ('List of sale and rent price history data. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `sale_price_history and rent_price_history` field instead.</strong>',)
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\HistoryCollection $history;
    /**
     * Whether the property is an auction property.
     */
    public bool $is_auction_property;
    /**
     * Whether the property is a bank property.
     */
    public bool $is_bank_property;
    /**
     * Whether the property is listed by a private individual, as opposed to an agent or a professional.
     */
    public bool $is_private_property;
    /**
     * The list of listings related to the property.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\ListingsCollection $listings;
    /**
     * Living area.
     */
    public int $living_area;
    /**
     * Information about property location.
     */
    public \CasafariSDK\DTOs\Api\PropertyDetailResponseV1\LocationDTO $location;
    /**
     * Information about all the parent locations (including property location) up to the country.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\LocationsStructureCollection $locations_structure;
    /**
     * Minimum rental area in square meters (mainly applicable to commercial properties).<br><span style="color:red">Available only for Germany.</span>
     */
    public ?int $min_rent_area;
    /**
     * Number of parking spaces.
     */
    public ?int $number_of_parkings;
    /**
     * Operation types for which property is available.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\OperationsCollection $operations;
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
     * List of reference numbers from listings.
     */
    public \CasafariSDK\Collections\StringCollection $ref_numbers;
    /**
     * Rent price currency code.
     */
    public string $rent_currency;
    /**
     * Rent period.
     */
    public \CasafariSDK\Enums\Api\PropertyDetailResponseV1\RentPeriodEnum $rent_period;
    /**
     * Current rent price, in the currency of the listings (specified by the `rent_currency` field).
     */
    public int $rent_price;
    /**
     * Current rent price, in Euros.
     */
    public int $rent_price_base;
    /**
     * List of rent price history data.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\PriceHistoryCollection $rent_price_history;
    /**
     * Information about the last change of rent price.
     */
    public ?\CasafariSDK\DTOs\Api\PropertyDetailResponseV1\LastChangeDTO $rent_price_last_change;
    /**
     * Current rent price per square meter, in the currency of the listings (specified by the `rent_currency` field).
     */
    public float $rent_price_per_sqm;
    /**
     * Current rent price per square meter, in Euros.
     */
    public float $rent_price_per_sqm_base;
    /**
     * Current rent status of the property.
     */
    public \CasafariSDK\Enums\Api\PropertyDetailResponseV1\RentStatusEnum $rent_status;
    /**
     * List of rent status history data.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\StatusHistoryCollection $rent_status_history;
    /**
     * Information about the property last activity on the rental market.
     */
    public ?\CasafariSDK\DTOs\Api\PropertyDetailResponseV1\OnMarketDTO $rent_time_on_market;
    /**
     * Retail-related attributes of the property. Null for non-commercial properties or if the retail data is not available.
     */
    public ?\CasafariSDK\DTOs\Api\PropertyDetailResponseV1\RetailDataDTO $retail_data;
    /**
     * Number of rooms.
     */
    public int $rooms;
    /**
     * Sale price currency code.
     */
    public string $sale_currency;
    /**
     * Current sale price, in the currency of the listings (specified by the `sale_currency` field).
     */
    public int $sale_price;
    /**
     * Current sale price, in Euros.
     */
    public int $sale_price_base;
    /**
     * List of sale price history data.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\SalePriceHistoryArray\PriceHistoryCollection $sale_price_history;
    /**
     * Information about the last change of sale price.
     */
    public ?\CasafariSDK\DTOs\Api\PropertyDetailResponseV1\SalePriceLastChange\LastChangeDTO $sale_price_last_change;
    /**
     * Current sale price per square meter, in the currency of the listings (specified by the `sale_currency` field).
     */
    public float $sale_price_per_sqm;
    /**
     * Current sale price per square meter, in Euros.
     */
    public float $sale_price_per_sqm_base;
    /**
     * Current sale status of the property.
     */
    public \CasafariSDK\Enums\Api\PropertyDetailResponseV1\SaleStatusEnum $sale_status;
    /**
     * List of sale status history data.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\SaleStatusHistoryArray\StatusHistoryCollection $sale_status_history;
    /**
     * Information about the property last activity on the sales market.
     */
    public ?\CasafariSDK\DTOs\Api\PropertyDetailResponseV1\SaleTimeOnMarket\OnMarketDTO $sale_time_on_market;
    /**
     * List of property floor numbers based on listings data. Negative values indicate underground floors (e.g. basements).
     */
    public \CasafariSDK\Collections\IntegerCollection $source_floor_numbers;
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
     * Property type, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public \CasafariSDK\Enums\Api\PropertyDetailResponseV1\TypeEnum $type;
    /**
     * Property type group, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public string $type_group;
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
            'casafari_connect' => $value === null || is_bool($value) ? $this->casafari_connect = $value : parent::assignMember($name, $value),
            'ceiling_label' => $value === null || is_string($value) ? $this->ceiling_label = $value : parent::assignMember($name, $value),
            'changed_at' => is_string($value) ? $this->changed_at = $value : parent::assignMember($name, $value),
            'condition' => is_string($value) ? $this->condition = \CasafariSDK\Enums\Api\PropertyDetailResponseV1\ConditionEnum::from($value) : parent::assignMember($name, $value),
            'construction_year' => is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'distance' => $value === null || is_float($value) ? $this->distance = $value : parent::assignMember($name, $value),
            'energy_certificate' => is_string($value) ? $this->energy_certificate = $value : parent::assignMember($name, $value),
            'energy_rating' => is_string($value) ? $this->energy_rating = $value : parent::assignMember($name, $value),
            'floor_number' => $value === null || is_int($value) ? $this->floor_number = $value : parent::assignMember($name, $value),
            'gross_yield' => is_float($value) ? $this->gross_yield = $value : parent::assignMember($name, $value),
            'is_auction_property' => is_bool($value) ? $this->is_auction_property = $value : parent::assignMember($name, $value),
            'is_bank_property' => is_bool($value) ? $this->is_bank_property = $value : parent::assignMember($name, $value),
            'is_private_property' => is_bool($value) ? $this->is_private_property = $value : parent::assignMember($name, $value),
            'living_area' => is_int($value) ? $this->living_area = $value : parent::assignMember($name, $value),
            'min_rent_area' => $value === null || is_int($value) ? $this->min_rent_area = $value : parent::assignMember($name, $value),
            'number_of_parkings' => $value === null || is_int($value) ? $this->number_of_parkings = $value : parent::assignMember($name, $value),
            'pictures' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pictures = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'plot_area' => is_int($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'primary_listing_id' => is_int($value) ? $this->primary_listing_id = $value : parent::assignMember($name, $value),
            'property_id' => is_int($value) ? $this->property_id = $value : parent::assignMember($name, $value),
            'property_url' => $value === null || is_string($value) ? $this->property_url = $value : parent::assignMember($name, $value),
            'ref_numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ref_numbers = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'rent_currency' => is_string($value) ? $this->rent_currency = $value : parent::assignMember($name, $value),
            'rent_period' => is_string($value) ? $this->rent_period = \CasafariSDK\Enums\Api\PropertyDetailResponseV1\RentPeriodEnum::from($value) : parent::assignMember($name, $value),
            'rent_price' => is_int($value) ? $this->rent_price = $value : parent::assignMember($name, $value),
            'rent_price_base' => is_int($value) ? $this->rent_price_base = $value : parent::assignMember($name, $value),
            'rent_price_per_sqm' => is_float($value) ? $this->rent_price_per_sqm = $value : parent::assignMember($name, $value),
            'rent_price_per_sqm_base' => is_float($value) ? $this->rent_price_per_sqm_base = $value : parent::assignMember($name, $value),
            'rent_status' => is_string($value) ? $this->rent_status = \CasafariSDK\Enums\Api\PropertyDetailResponseV1\RentStatusEnum::from($value) : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sale_currency' => is_string($value) ? $this->sale_currency = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            'sale_price_base' => is_int($value) ? $this->sale_price_base = $value : parent::assignMember($name, $value),
            'sale_price_per_sqm' => is_float($value) ? $this->sale_price_per_sqm = $value : parent::assignMember($name, $value),
            'sale_price_per_sqm_base' => is_float($value) ? $this->sale_price_per_sqm_base = $value : parent::assignMember($name, $value),
            'sale_status' => is_string($value) ? $this->sale_status = \CasafariSDK\Enums\Api\PropertyDetailResponseV1\SaleStatusEnum::from($value) : parent::assignMember($name, $value),
            'source_floor_numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->source_floor_numbers = new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'terrace_area' => is_int($value) ? $this->terrace_area = $value : parent::assignMember($name, $value),
            'thumbnails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->thumbnails = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'total_area' => is_int($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \CasafariSDK\Enums\Api\PropertyDetailResponseV1\TypeEnum::from($value) : parent::assignMember($name, $value),
            'type_group' => is_string($value) ? $this->type_group = $value : parent::assignMember($name, $value),
            'zip_code' => $value === null || is_string($value) ? $this->zip_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
