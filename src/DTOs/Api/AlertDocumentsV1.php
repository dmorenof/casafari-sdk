<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class AlertDocumentsV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'address',
    'agency',
    'agency_legal_id',
    'agent',
    'alert_date',
    'alert_id',
    'alert_subtype',
    'alert_type',
    'available_from',
    'available_to',
    'bathrooms',
    'bedrooms',
    'cadastral_reference',
    'condition',
    'construction_year',
    'contacts_info',
    'coordinates',
    'created_at',
    'created_at_with_photos',
    'description',
    'energy_certificate',
    'energy_rating',
    'features',
    'heating_type',
    'is_auction_property',
    'is_bank_property',
    'is_new_development_property',
    'is_private_property',
    'listing_id',
    'listing_uid',
    'living_area',
    'location',
    'locations_structure',
    'new_value',
    'old_value',
    'operations',
    'plot_area',
    'property_id',
    'ref',
    'rent_currency',
    'rent_period',
    'rent_price',
    'rent_price_base',
    'rent_price_per_sqm',
    'rent_price_per_sqm_base',
    'rent_status',
    'rooms',
    'sale_currency',
    'sale_price',
    'sale_price_base',
    'sale_price_per_sqm',
    'sale_price_per_sqm_base',
    'sale_status',
    'source_name',
    'terrace_area',
    'title',
    'total_area',
    'type',
    'type_group',
    'updated_at',
    'zip_code',
];

    protected const array VALIDATION = [
    'alert_date' => [
        'format' => 'date',
    ],
    'available_from' => [
        'format' => 'date',
    ],
    'available_to' => [
        'format' => 'date',
    ],
    'created_at' => [
        'format' => 'date-time',
    ],
    'created_at_with_photos' => [
        'format' => 'date-time',
    ],
    'updated_at' => [
        'format' => 'date-time',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'alert_date_and_time',
    'listing_old_url',
    'listing_url',
    'pictures',
    'property_url',
    'thumbnails',
];

    /**
     * Property address.
     */
    public string $address;
    /**
     * The company that manages the listing.
     */
    public string $agency;
    /**
     * Agency legal identifier specified on the source. Only for France and its overseas territories(DROM and COM).
     */
    public string $agency_legal_id;
    /**
     * The agent that manages the listing.
     */
    public string $agent;
    /**
     * Date when the alert occurred.
     * Format: date
     */
    public string $alert_date {
        set {
            $this->assigning('alert_date', $value);
            $this->alert_date = $value;
        }
    }
    /**
     * Date and time when the alert occurred.
     */
    public ?string $alert_date_and_time;
    /**
     * ID of the alert.
     */
    public int $alert_id;
    /**
     * The subtype of the alert.
     */
    public ?\CasafariSDK\Enums\Api\AlertDocumentsV1\AlertSubtypeEnum $alert_subtype;
    /**
     * The type of the alert.
     */
    public \CasafariSDK\Enums\Api\AlertDocumentsV1\AlertTypeEnum $alert_type;
    /**
     * The date the listing property becomes available for occupancy. The start of the availability window.
     * Format: date
     */
    public ?string $available_from {
        set {
            $this->assigning('available_from', $value);
            $this->available_from = $value;
        }
    }
    /**
     * The date the listing property stops being available. The end of the availability window.
     * Format: date
     */
    public ?string $available_to {
        set {
            $this->assigning('available_to', $value);
            $this->available_to = $value;
        }
    }
    /**
     * Number of bathrooms.
     */
    public int $bathrooms;
    /**
     * Number of bedrooms.
     */
    public ?int $bedrooms;
    /**
     * Cadastral reference of the estate.
     */
    public ?string $cadastral_reference;
    /**
     * Property condition, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public \CasafariSDK\Enums\Api\AlertDocumentsV1\ConditionEnum $condition;
    /**
     * Construction year.
     */
    public int $construction_year;
    /**
     * Information about listing contacts.
     */
    public \CasafariSDK\DTOs\Api\AlertDocumentsV1\ContactsInfoDTO $contacts_info;
    /**
     * Property coordinates.
     */
    public ?\CasafariSDK\DTOs\Api\AlertDocumentsV1\CoordinatesDTO $coordinates;
    /**
     * Date and time when the alert was created (UTC).
     * Format: date-time
     */
    public string $created_at {
        set {
            $this->assigning('created_at', $value);
            $this->created_at = $value;
        }
    }
    /**
     * Date and time (UTC) when the alert was created and its photos were processed. Can be `null` if photo processing has not finished yet.
     * If the listing has no photos but the system has finished the processing, this field will contain its date and time.
     * Format: date-time
     */
    public ?string $created_at_with_photos {
        set {
            $this->assigning('created_at_with_photos', $value);
            $this->created_at_with_photos = $value;
        }
    }
    /**
     * Listing description.
     */
    public string $description;
    /**
     * Energy certificate classification that attests to the energy efficiency of a listing. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `energy_rating` field instead.</strong>
     */
    public string $energy_certificate;
    /**
     * Energy rating that attests to the energy efficiency of a listing.
     */
    public string $energy_rating;
    /**
     * Property features, as returned by the [GET /api/v1/references/features](/#operation/api__get__v1__references__features) endpoint.
     */
    public \CasafariSDK\DTOs\Api\AlertDocumentsV1\FeaturesDTO $features;
    /**
     * Type of heating.
     */
    public string $heating_type;
    /**
     * Whether the listing property is an auction property.
     */
    public bool $is_auction_property;
    /**
     * Whether the listing property is a bank property.
     */
    public bool $is_bank_property;
    /**
     * Whether the listing property is a new development property.
     */
    public bool $is_new_development_property;
    /**
     * Whether the property is listed by a private individual, as opposed to an agent or a professional.
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
     * Living area.
     */
    public int $living_area;
    /**
     * Information about property location.
     */
    public \CasafariSDK\DTOs\Api\AlertDocumentsV1\LocationDTO $location;
    /**
     * Information about all the parent locations (including property location) up to the country.
     */
    public \CasafariSDK\Collections\Api\AlertDocumentsV1\LocationsStructureCollection $locations_structure;
    /**
     * Value after change.
     */
    public string $new_value;
    /**
     * Value before change.
     */
    public string $old_value;
    /**
     * Operation types for which listing property is available.
     */
    public \CasafariSDK\Collections\Api\AlertDocumentsV1\OperationsCollection $operations;
    /**
     * List of the original picture image URLs.
     */
    public \CasafariSDK\Collections\StringCollection $pictures;
    /**
     * Plot area.
     */
    public int $plot_area;
    /**
     * ID of the property to which the listing belongs.
     */
    public int $property_id;
    /**
     * URL of the property in the CASAFARI website.
     */
    public ?string $property_url;
    /**
     * The reference ID of the listing.
     */
    public string $ref;
    /**
     * Rent price currency code.
     */
    public string $rent_currency;
    /**
     * Rent period.
     */
    public \CasafariSDK\Enums\Api\AlertDocumentsV1\RentPeriodEnum $rent_period;
    /**
     * Current rent price, in the currency of the listing (specified by the `rent_currency` field).
     */
    public int $rent_price;
    /**
     * Current rent price, in Euros.
     */
    public int $rent_price_base;
    /**
     * Current rent price per square meter, in the currency of the listing (specified by the `rent_currency` field).
     */
    public float $rent_price_per_sqm;
    /**
     * Current rent price per square meter, in Euros.
     */
    public float $rent_price_per_sqm_base;
    /**
     * Current rent status of the listing.
     */
    public \CasafariSDK\Enums\Api\AlertDocumentsV1\RentStatusEnum $rent_status;
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
     * Current sale price per square meter, in the currency of the listing (specified by the `sale_currency` field).
     */
    public float $sale_price_per_sqm;
    /**
     * Current sale price per square meter, in Euros.
     */
    public float $sale_price_per_sqm_base;
    /**
     * Current sale status of the listing.
     */
    public \CasafariSDK\Enums\Api\AlertDocumentsV1\SaleStatusEnum $sale_status;
    /**
     * The name of the source.
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
     * Listing title.
     */
    public string $title;
    /**
     * Total area.
     */
    public int $total_area;
    /**
     * Listing property type, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public \CasafariSDK\Enums\Api\AlertDocumentsV1\TypeEnum $type;
    /**
     * Listing property type group, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.
     */
    public string $type_group;
    /**
     * Date and time when the alert data was updated (UTC).
     * Format: date-time
     */
    public string $updated_at {
        set {
            $this->assigning('updated_at', $value);
            $this->updated_at = $value;
        }
    }
    /**
     * The location zip code.
     */
    public ?string $zip_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'agency' => is_string($value) ? $this->agency = $value : parent::assignMember($name, $value),
            'agency_legal_id' => is_string($value) ? $this->agency_legal_id = $value : parent::assignMember($name, $value),
            'agent' => is_string($value) ? $this->agent = $value : parent::assignMember($name, $value),
            'alert_date' => is_string($value) ? $this->alert_date = $value : parent::assignMember($name, $value),
            'alert_date_and_time' => $value === null || is_string($value) ? $this->alert_date_and_time = $value : parent::assignMember($name, $value),
            'alert_id' => is_int($value) ? $this->alert_id = $value : parent::assignMember($name, $value),
            'alert_subtype' => $value === null || is_string($value) ? $this->alert_subtype = $value === null ? null : \CasafariSDK\Enums\Api\AlertDocumentsV1\AlertSubtypeEnum::from($value) : parent::assignMember($name, $value),
            'alert_type' => is_string($value) ? $this->alert_type = \CasafariSDK\Enums\Api\AlertDocumentsV1\AlertTypeEnum::from($value) : parent::assignMember($name, $value),
            'available_from' => $value === null || is_string($value) ? $this->available_from = $value : parent::assignMember($name, $value),
            'available_to' => $value === null || is_string($value) ? $this->available_to = $value : parent::assignMember($name, $value),
            'bathrooms' => is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'bedrooms' => $value === null || is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'cadastral_reference' => $value === null || is_string($value) ? $this->cadastral_reference = $value : parent::assignMember($name, $value),
            'condition' => is_string($value) ? $this->condition = \CasafariSDK\Enums\Api\AlertDocumentsV1\ConditionEnum::from($value) : parent::assignMember($name, $value),
            'construction_year' => is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'created_at' => is_string($value) ? $this->created_at = $value : parent::assignMember($name, $value),
            'created_at_with_photos' => $value === null || is_string($value) ? $this->created_at_with_photos = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'energy_certificate' => is_string($value) ? $this->energy_certificate = $value : parent::assignMember($name, $value),
            'energy_rating' => is_string($value) ? $this->energy_rating = $value : parent::assignMember($name, $value),
            'heating_type' => is_string($value) ? $this->heating_type = $value : parent::assignMember($name, $value),
            'is_auction_property' => is_bool($value) ? $this->is_auction_property = $value : parent::assignMember($name, $value),
            'is_bank_property' => is_bool($value) ? $this->is_bank_property = $value : parent::assignMember($name, $value),
            'is_new_development_property' => is_bool($value) ? $this->is_new_development_property = $value : parent::assignMember($name, $value),
            'is_private_property' => is_bool($value) ? $this->is_private_property = $value : parent::assignMember($name, $value),
            'listing_id' => is_int($value) ? $this->listing_id = $value : parent::assignMember($name, $value),
            'listing_old_url' => $value === null || is_string($value) ? $this->listing_old_url = $value : parent::assignMember($name, $value),
            'listing_uid' => is_string($value) ? $this->listing_uid = $value : parent::assignMember($name, $value),
            'listing_url' => $value === null || is_string($value) ? $this->listing_url = $value : parent::assignMember($name, $value),
            'living_area' => is_int($value) ? $this->living_area = $value : parent::assignMember($name, $value),
            'new_value' => is_string($value) ? $this->new_value = $value : parent::assignMember($name, $value),
            'old_value' => is_string($value) ? $this->old_value = $value : parent::assignMember($name, $value),
            'pictures' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->pictures = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'plot_area' => is_int($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'property_id' => is_int($value) ? $this->property_id = $value : parent::assignMember($name, $value),
            'property_url' => $value === null || is_string($value) ? $this->property_url = $value : parent::assignMember($name, $value),
            'ref' => is_string($value) ? $this->ref = $value : parent::assignMember($name, $value),
            'rent_currency' => is_string($value) ? $this->rent_currency = $value : parent::assignMember($name, $value),
            'rent_period' => is_string($value) ? $this->rent_period = \CasafariSDK\Enums\Api\AlertDocumentsV1\RentPeriodEnum::from($value) : parent::assignMember($name, $value),
            'rent_price' => is_int($value) ? $this->rent_price = $value : parent::assignMember($name, $value),
            'rent_price_base' => is_int($value) ? $this->rent_price_base = $value : parent::assignMember($name, $value),
            'rent_price_per_sqm' => is_float($value) ? $this->rent_price_per_sqm = $value : parent::assignMember($name, $value),
            'rent_price_per_sqm_base' => is_float($value) ? $this->rent_price_per_sqm_base = $value : parent::assignMember($name, $value),
            'rent_status' => is_string($value) ? $this->rent_status = \CasafariSDK\Enums\Api\AlertDocumentsV1\RentStatusEnum::from($value) : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sale_currency' => is_string($value) ? $this->sale_currency = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            'sale_price_base' => is_int($value) ? $this->sale_price_base = $value : parent::assignMember($name, $value),
            'sale_price_per_sqm' => is_float($value) ? $this->sale_price_per_sqm = $value : parent::assignMember($name, $value),
            'sale_price_per_sqm_base' => is_float($value) ? $this->sale_price_per_sqm_base = $value : parent::assignMember($name, $value),
            'sale_status' => is_string($value) ? $this->sale_status = \CasafariSDK\Enums\Api\AlertDocumentsV1\SaleStatusEnum::from($value) : parent::assignMember($name, $value),
            'source_name' => is_string($value) ? $this->source_name = $value : parent::assignMember($name, $value),
            'terrace_area' => is_int($value) ? $this->terrace_area = $value : parent::assignMember($name, $value),
            'thumbnails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->thumbnails = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'total_area' => is_int($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \CasafariSDK\Enums\Api\AlertDocumentsV1\TypeEnum::from($value) : parent::assignMember($name, $value),
            'type_group' => is_string($value) ? $this->type_group = $value : parent::assignMember($name, $value),
            'updated_at' => is_string($value) ? $this->updated_at = $value : parent::assignMember($name, $value),
            'zip_code' => $value === null || is_string($value) ? $this->zip_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
