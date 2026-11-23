<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertyDetailResponseV1;

final class ListingsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'agency',
    'agency_legal_id',
    'bathrooms',
    'bedrooms',
    'casafari_connect',
    'ceiling_label',
    'commission',
    'companies',
    'construction_year',
    'contacts_info',
    'created_at',
    'description',
    'energy_certificate',
    'energy_rating',
    'floor_number',
    'heating_type',
    'is_auction_property',
    'is_bank_property',
    'is_private',
    'is_private_property',
    'listing_id',
    'listing_uid',
    'min_rent_area',
    'plot_area',
    'rent_currency',
    'rent_price',
    'rent_price_base',
    'rent_status',
    'rooms',
    'sale_currency',
    'sale_price',
    'sale_price_base',
    'sale_status',
    'source_name',
    'terrace_area',
    'total_area',
];

    protected const array VALIDATION = [
    'created_at' => [
        'format' => 'date',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'listing_old_url',
    'listing_url',
    'pictures',
    'ref_numbers',
    'thumbnails',
];

    /**
     * The company that manages the listing.
     */
    public string $agency;
    /**
     * Agency legal identifier specified on the source. Only for France and its overseas territories(DROM and COM).
     */
    public string $agency_legal_id;
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
     * Commission percentage.<br><span style="color:red">Available only for Germany.</span>
     */
    public ?float $commission;
    /**
     * Companies to which the listing belongs.
     */
    public \CasafariSDK\Collections\Api\PropertyDetailResponseV1\ListingsItem\CompaniesCollection $companies;
    /**
     * Construction year.
     */
    public int $construction_year;
    /**
     * Information about listing contacts.
     */
    public \CasafariSDK\DTOs\Api\PropertyDetailResponseV1\ListingsItem\ContactsInfoDTO $contacts_info;
    /**
     * The datetime when the listing was added.
     * Format: date
     */
    public string $created_at {
        set {
            $this->assigning('created_at', $value);
            $this->created_at = $value;
        }
    }
    /**
     * Property description.
     */
    public string $description;
    /**
     * Energy certificate classification that attests to the energy efficiency of a property. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `energy_rating` field instead.</strong>
     */
    public string $energy_certificate;
    /**
     * Energy rating that attests to the energy efficiency of a property.
     */
    public string $energy_rating;
    /**
     * Exact floor number. Negative values indicate underground floors (e.g. basements).
     */
    public ?int $floor_number;
    /**
     * Type of heating.
     */
    public string $heating_type;
    /**
     * Whether the listing is an auction property.
     */
    public bool $is_auction_property;
    /**
     * Whether the listing is a bank property.
     */
    public bool $is_bank_property;
    /**
     * Whether the listing is listed by a private individual, as opposed to an agent or a professional.
     */
    public bool $is_private;
    /**
     * Whether the listing is listed by a private individual, as opposed to an agent or a professional.
     */
    public bool $is_private_property;
    /**
     * ID of the listing (ad).
     */
    public int $listing_id;
    /**
     * Old URL of the listing. Available only for currently inactive listings.
     */
    public ?string $listing_old_url;
    /**
     * Unique ID of the listing on the source site.
     */
    public string $listing_uid;
    /**
     * URL of the listing. Available only for currently active listings.
     */
    public ?string $listing_url;
    /**
     * Minimum rental area in square meters (mainly applicable to commercial properties).<br><span style="color:red">Available only for Germany.</span>
     */
    public ?int $min_rent_area;
    /**
     * List of the original picture image URLs.
     */
    public \CasafariSDK\Collections\StringCollection $pictures;
    /**
     * Plot area.
     */
    public int $plot_area;
    /**
     * List of reference numbers.
     */
    public \CasafariSDK\Collections\StringCollection $ref_numbers;
    /**
     * Rent price currency code.
     */
    public string $rent_currency;
    /**
     * Current rent price, in the currency of the listing (specified by the `rent_currency` field).
     */
    public int $rent_price;
    /**
     * Current rent price, in Euros.
     */
    public int $rent_price_base;
    /**
     * Current rent status of the listing.
     */
    public \CasafariSDK\Enums\Api\PropertyDetailResponseV1\ListingsItem\RentStatusEnum $rent_status;
    /**
     * Number of rooms.
     */
    public int $rooms;
    /**
     * Sale price currency code.
     */
    public string $sale_currency;
    /**
     * Current sale price, in the currency of the listing (specified by the `sale_currency` field).
     */
    public int $sale_price;
    /**
     * Current sale price, in Euros.
     */
    public int $sale_price_base;
    /**
     * Current sale status of the listing.
     */
    public \CasafariSDK\Enums\Api\PropertyDetailResponseV1\ListingsItem\SaleStatusEnum $sale_status;
    /**
     * The name of the source where the listing is displayed.
     */
    public string $source_name;
    /**
     * Terrace area.
     */
    public int $terrace_area;
    /**
     * List of the thumbnail image URLs.
     */
    public \CasafariSDK\Collections\StringCollection $thumbnails;
    /**
     * Total area.
     */
    public int $total_area;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agency' => is_string($value) ? $this->agency = $value : parent::assignMember($name, $value),
            'agency_legal_id' => is_string($value) ? $this->agency_legal_id = $value : parent::assignMember($name, $value),
            'bathrooms' => is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'bedrooms' => $value === null || is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'casafari_connect' => $value === null || is_bool($value) ? $this->casafari_connect = $value : parent::assignMember($name, $value),
            'ceiling_label' => $value === null || is_string($value) ? $this->ceiling_label = $value : parent::assignMember($name, $value),
            'commission' => $value === null || is_float($value) ? $this->commission = $value : parent::assignMember($name, $value),
            'construction_year' => is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'energy_certificate' => is_string($value) ? $this->energy_certificate = $value : parent::assignMember($name, $value),
            'energy_rating' => is_string($value) ? $this->energy_rating = $value : parent::assignMember($name, $value),
            'floor_number' => $value === null || is_int($value) ? $this->floor_number = $value : parent::assignMember($name, $value),
            'heating_type' => is_string($value) ? $this->heating_type = $value : parent::assignMember($name, $value),
            'is_auction_property' => is_bool($value) ? $this->is_auction_property = $value : parent::assignMember($name, $value),
            'is_bank_property' => is_bool($value) ? $this->is_bank_property = $value : parent::assignMember($name, $value),
            'is_private' => is_bool($value) ? $this->is_private = $value : parent::assignMember($name, $value),
            'is_private_property' => is_bool($value) ? $this->is_private_property = $value : parent::assignMember($name, $value),
            'listing_id' => is_int($value) ? $this->listing_id = $value : parent::assignMember($name, $value),
            'listing_old_url' => $value === null || is_string($value) ? $this->listing_old_url = $value : parent::assignMember($name, $value),
            'listing_uid' => is_string($value) ? $this->listing_uid = $value : parent::assignMember($name, $value),
            'listing_url' => $value === null || is_string($value) ? $this->listing_url = $value : parent::assignMember($name, $value),
            'min_rent_area' => $value === null || is_int($value) ? $this->min_rent_area = $value : parent::assignMember($name, $value),
            'pictures' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pictures = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'plot_area' => is_int($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'ref_numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ref_numbers = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'rent_currency' => is_string($value) ? $this->rent_currency = $value : parent::assignMember($name, $value),
            'rent_price' => is_int($value) ? $this->rent_price = $value : parent::assignMember($name, $value),
            'rent_price_base' => is_int($value) ? $this->rent_price_base = $value : parent::assignMember($name, $value),
            'rent_status' => is_string($value) ? $this->rent_status = \CasafariSDK\Enums\Api\PropertyDetailResponseV1\ListingsItem\RentStatusEnum::from($value) : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sale_currency' => is_string($value) ? $this->sale_currency = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            'sale_price_base' => is_int($value) ? $this->sale_price_base = $value : parent::assignMember($name, $value),
            'sale_status' => is_string($value) ? $this->sale_status = \CasafariSDK\Enums\Api\PropertyDetailResponseV1\ListingsItem\SaleStatusEnum::from($value) : parent::assignMember($name, $value),
            'source_name' => is_string($value) ? $this->source_name = $value : parent::assignMember($name, $value),
            'terrace_area' => is_int($value) ? $this->terrace_area = $value : parent::assignMember($name, $value),
            'thumbnails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->thumbnails = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'total_area' => is_int($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
