<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class AlertsSearchFilterV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'operation',
];

    protected const array PROPERTY_MAP = [
    'private' => 'private_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'private_' => 'private',
];

    protected const array VALIDATION = [
    'alert_date_from' => [
        'format' => 'date',
    ],
    'alert_date_to' => [
        'format' => 'date',
    ],
    'bathrooms_from' => [
        'minimum' => 1.0,
        'maximum' => 15000.0,
    ],
    'bathrooms_to' => [
        'minimum' => 1.0,
        'maximum' => 15000.0,
    ],
    'bedrooms_from' => [
        'minimum' => 0.0,
        'maximum' => 15000.0,
    ],
    'bedrooms_to' => [
        'minimum' => 0.0,
        'maximum' => 15000.0,
    ],
    'construction_year_from' => [
        'minimum' => 1.0,
        'maximum' => 3000.0,
    ],
    'construction_year_to' => [
        'minimum' => 1.0,
        'maximum' => 3000.0,
    ],
    'created_at_from' => [
        'format' => 'date-time',
    ],
    'created_at_to' => [
        'format' => 'date-time',
    ],
    'created_at_with_photos_from' => [
        'format' => 'date-time',
    ],
    'created_at_with_photos_to' => [
        'format' => 'date-time',
    ],
    'custom_location' => [
        'minItems' => 4,
    ],
    'custom_locations' => [
        'maxItems' => 4,
    ],
    'listing_ids' => [
        'maxItems' => 100,
    ],
    'location_ids' => [
        'maxItems' => 100,
    ],
    'plot_area_from' => [
        'minimum' => 1.0,
        'maximum' => 10000000.0,
    ],
    'plot_area_to' => [
        'minimum' => 1.0,
        'maximum' => 10000000.0,
    ],
    'price_from' => [
        'minimum' => 1.0,
        'maximum' => 2147483647.0,
    ],
    'price_per_sqm_from' => [
        'minimum' => 1.0,
        'maximum' => 2147483647.0,
    ],
    'price_per_sqm_to' => [
        'minimum' => 1.0,
        'maximum' => 2147483647.0,
    ],
    'price_to' => [
        'minimum' => 1.0,
        'maximum' => 2147483647.0,
    ],
    'property_ids' => [
        'maxItems' => 100,
    ],
    'total_area_from' => [
        'minimum' => 1.0,
        'maximum' => 10000000.0,
    ],
    'total_area_to' => [
        'minimum' => 1.0,
        'maximum' => 10000000.0,
    ],
];

    /**
     * Start date (in the format `YYYY-MM-DD`) of the period for alerts of interest.
     * Format: date
     */
    public string $alert_date_from {
        set {
            $this->assigning('alert_date_from', $value);
            $this->alert_date_from = $value;
        }
    }
    /**
     * End date (in the format `YYYY-MM-DD`) of the period for alerts of interest.
     * Format: date
     */
    public string $alert_date_to {
        set {
            $this->assigning('alert_date_to', $value);
            $this->alert_date_to = $value;
        }
    }
    /**
     * Alert subtypes.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\AlertSubtypesCollection $alert_subtypes;
    /**
     * Whether to return alerts from auction property listings.
     */
    public bool $auction;
    /**
     * Whether to return alerts from bank property listings.
     */
    public bool $bank;
    /**
     * Minimum number of bathrooms.
     */
    public int $bathrooms_from {
        set {
            $this->assigning('bathrooms_from', $value);
            $this->bathrooms_from = $value;
        }
    }
    /**
     * Maximum number of bathrooms.
     */
    public int $bathrooms_to {
        set {
            $this->assigning('bathrooms_to', $value);
            $this->bathrooms_to = $value;
        }
    }
    /**
     * Minimum number of bedrooms.
     */
    public int $bedrooms_from {
        set {
            $this->assigning('bedrooms_from', $value);
            $this->bedrooms_from = $value;
        }
    }
    /**
     * Maximum number of bedrooms.
     */
    public int $bedrooms_to {
        set {
            $this->assigning('bedrooms_to', $value);
            $this->bedrooms_to = $value;
        }
    }
    /**
     * Property characteristics.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\CharacteristicsCollection $characteristics;
    /**
     * Property conditions, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\ConditionsCollection $conditions;
    /**
     * Minimum construction year.
     */
    public int $construction_year_from {
        set {
            $this->assigning('construction_year_from', $value);
            $this->construction_year_from = $value;
        }
    }
    /**
     * Maximum construction year.
     */
    public int $construction_year_to {
        set {
            $this->assigning('construction_year_to', $value);
            $this->construction_year_to = $value;
        }
    }
    /**
     * Start date and time (in the format `YYYY-MM-DDTHH:mm:ss`) to filter alerts by their creation in the database (UTC). Useful for incremental sync to avoid fetching already fetched data.
     * Format: date-time
     */
    public string $created_at_from {
        set {
            $this->assigning('created_at_from', $value);
            $this->created_at_from = $value;
        }
    }
    /**
     * End date and time (in the format `YYYY-MM-DDTHH:mm:ss`) to filter alerts by their creation in the database (UTC). Useful for incremental sync to avoid fetching already fetched data.
     * Format: date-time
     */
    public string $created_at_to {
        set {
            $this->assigning('created_at_to', $value);
            $this->created_at_to = $value;
        }
    }
    /**
     * Start date and time (in the format YYYY-MM-DDTHH:mm:ss) to filter alerts by their creation in the database (UTC), only including alerts for which photo processing has been completed. Use it to fetch alerts with already assigned photos.
     * Note: Some alerts may still not have photos if the original listing did not include any.
     * Format: date-time
     */
    public string $created_at_with_photos_from {
        set {
            $this->assigning('created_at_with_photos_from', $value);
            $this->created_at_with_photos_from = $value;
        }
    }
    /**
     * End date and time (in the format YYYY-MM-DDTHH:mm:ss) to filter alerts by their creation in the database (UTC), only including alerts for which photo processing has been completed. Use it to fetch alerts with already assigned photos.
     * Note: Some alerts may still not have photos if the original listing did not include any.
     * Format: date-time
     */
    public string $created_at_with_photos_to {
        set {
            $this->assigning('created_at_with_photos_to', $value);
            $this->created_at_with_photos_to = $value;
        }
    }
    /**
     * Closed polygon of geo-points to search within. First and last points must match.<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `custom_locations` field instead.</strong>
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\CustomLocationCollection $custom_location {
        set {
            $this->assigning('custom_location', $value);
            $this->custom_location = $value;
        }
    }
    /**
     * List of closed polygons of geo-points to search within. Each polygon must contain at least 4 points. First and last points must match in each polygon. Maximum 4 polygons allowed.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\CustomLocationsArray\CustomLocationsCollection $custom_locations {
        set {
            $this->assigning('custom_locations', $value);
            $this->custom_locations = $value;
        }
    }
    /**
     * Cardinal direction the property faces. "<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `directions` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\AlertsSearchFilterV1\DirectionEnum $direction;
    /**
     * List of cardinal directions the property faces.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\DirectionsCollection $directions;
    /**
     * Whether to return alerts exclusively from specific listings rather than from all related to the property listings.<br/>Can be passed only along with at least one of the fields: `private`, `with_agencies`, `without_agencies`.
     */
    public bool $exclusive;
    /**
     * Floor type. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `floors` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\AlertsSearchFilterV1\FloorEnum $floor;
    /**
     * List of floor types.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\FloorsCollection $floors;
    /**
     * Whether to return alerts only from listings with or without agency name.
     */
    public bool $has_agency_name;
    /**
     * Whether to return alerts only from listings with or without email.
     */
    public bool $has_email;
    /**
     * Whether to return alerts only from listings with or without `phone` number.
     */
    public bool $has_phone;
    /**
     * Return alerts only for properties from specified agents. To find allowed agent names use the [GET /api/v1/references/agents](/#operation/api__get__v1__references__agents) endpoint.
     */
    public \CasafariSDK\Collections\StringCollection $listing_agents;
    /**
     * List of listing IDs.
     */
    public \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\ListingIdsCollection $listing_ids {
        set {
            $this->assigning('listing_ids', $value);
            $this->listing_ids = $value;
        }
    }
    /**
     * List of location IDs, as returned by the [POST /api/v1/references/locations](/#operation/api__post__v1__references__locations) endpoint.
     */
    public \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\LocationIdsCollection $location_ids {
        set {
            $this->assigning('location_ids', $value);
            $this->location_ids = $value;
        }
    }
    /**
     * Whether to return alerts from new development property listings.
     */
    public bool $new_development;
    /**
     * Operation type.
     */
    public \CasafariSDK\Enums\Api\AlertsSearchFilterV1\OperationEnum $operation;
    /**
     * Property view orientation.
     */
    public \CasafariSDK\Enums\Api\AlertsSearchFilterV1\OrientationEnum $orientation;
    /**
     * Minimum plot area.
     */
    public int $plot_area_from {
        set {
            $this->assigning('plot_area_from', $value);
            $this->plot_area_from = $value;
        }
    }
    /**
     * Maximum plot area.
     */
    public int $plot_area_to {
        set {
            $this->assigning('plot_area_to', $value);
            $this->plot_area_to = $value;
        }
    }
    /**
     * Minimum price value.
     */
    public int $price_from {
        set {
            $this->assigning('price_from', $value);
            $this->price_from = $value;
        }
    }
    /**
     * Minimum value for price per square meter.
     */
    public int $price_per_sqm_from {
        set {
            $this->assigning('price_per_sqm_from', $value);
            $this->price_per_sqm_from = $value;
        }
    }
    /**
     * Maximum value for price per square meter.
     */
    public int $price_per_sqm_to {
        set {
            $this->assigning('price_per_sqm_to', $value);
            $this->price_per_sqm_to = $value;
        }
    }
    /**
     * Maximum price value.
     */
    public int $price_to {
        set {
            $this->assigning('price_to', $value);
            $this->price_to = $value;
        }
    }
    /**
     * Whether to return alerts only from properties listed by a private individual, as opposed to an agent or a professional.
     */
    public bool $private_;
    /**
     * List of property IDs.
     */
    public \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\ListingIdsCollection $property_ids {
        set {
            $this->assigning('property_ids', $value);
            $this->property_ids = $value;
        }
    }
    /**
     * List of reference numbers from listings.
     */
    public \CasafariSDK\Collections\StringCollection $ref_numbers;
    /**
     * Current status of the listing.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\StatusesCollection $statuses;
    /**
     * Minimum total area.
     */
    public int $total_area_from {
        set {
            $this->assigning('total_area_from', $value);
            $this->total_area_from = $value;
        }
    }
    /**
     * Maximum total area.
     */
    public int $total_area_to {
        set {
            $this->assigning('total_area_to', $value);
            $this->total_area_to = $value;
        }
    }
    /**
     * <br>Country availability per type is available at the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.<br><br>Property types by type groups:<br/><strong>apartment:</strong> dachgeschosswohnung, etagenwohnung, erdgeschosswohnung, penthouse, studio, apartment, duplex<br/><strong>house:</strong> zweifamilienhaus, palace, chalet, reihenendhaus, reihenmittelhaus, townhouse, einfamilienhaus, bungalow, family_house (<span style="color:red">DEPRECATED</span>), country_house, house, landwirtschaftliche_betriebe, reihenhaus, country_estate, villa<br/><strong>room:</strong> room<br/><strong>building:</strong> apartment_building, office_building, mix_use_building<br/><strong>investment:</strong> werkstatt, retail, hotel, industrial, office, other_commercial, warehouse, restaurant<br/><strong>plot:</strong> plot (<span style="color:red">DEPRECATED</span>), urban_plot, rural_plot<br/><strong>other:</strong> parking, garage, other
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\TypesCollection $types;
    /**
     * View from the property. "<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `views` field instead.</strong>"
     */
    public \CasafariSDK\Enums\Api\AlertsSearchFilterV1\ViewEnum $view;
    /**
     * List of views from the property.
     */
    public \CasafariSDK\Collections\Api\AlertsSearchFilterV1\ViewsCollection $views;
    /**
     * Return alerts only for properties from specified agencies, companies or sources. To find allowed agency names use the [GET /api/v1/references/agencies](/#operation/api__get__v1__references__agencies) endpoint.
     */
    public \CasafariSDK\Collections\StringCollection $with_agencies;
    /**
     * Exclude alerts for properties from specified agencies, companies or sources. To find allowed agency names use the [GET /api/v1/references/agencies](/#operation/api__get__v1__references__agencies) endpoint.
     */
    public \CasafariSDK\Collections\StringCollection $without_agencies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alert_date_from' => is_string($value) ? $this->alert_date_from = $value : parent::assignMember($name, $value),
            'alert_date_to' => is_string($value) ? $this->alert_date_to = $value : parent::assignMember($name, $value),
            'auction' => is_bool($value) ? $this->auction = $value : parent::assignMember($name, $value),
            'bank' => is_bool($value) ? $this->bank = $value : parent::assignMember($name, $value),
            'bathrooms_from' => is_int($value) ? $this->bathrooms_from = $value : parent::assignMember($name, $value),
            'bathrooms_to' => is_int($value) ? $this->bathrooms_to = $value : parent::assignMember($name, $value),
            'bedrooms_from' => is_int($value) ? $this->bedrooms_from = $value : parent::assignMember($name, $value),
            'bedrooms_to' => is_int($value) ? $this->bedrooms_to = $value : parent::assignMember($name, $value),
            'construction_year_from' => is_int($value) ? $this->construction_year_from = $value : parent::assignMember($name, $value),
            'construction_year_to' => is_int($value) ? $this->construction_year_to = $value : parent::assignMember($name, $value),
            'created_at_from' => is_string($value) ? $this->created_at_from = $value : parent::assignMember($name, $value),
            'created_at_to' => is_string($value) ? $this->created_at_to = $value : parent::assignMember($name, $value),
            'created_at_with_photos_from' => is_string($value) ? $this->created_at_with_photos_from = $value : parent::assignMember($name, $value),
            'created_at_with_photos_to' => is_string($value) ? $this->created_at_with_photos_to = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \CasafariSDK\Enums\Api\AlertsSearchFilterV1\DirectionEnum::from($value) : parent::assignMember($name, $value),
            'exclusive' => is_bool($value) ? $this->exclusive = $value : parent::assignMember($name, $value),
            'floor' => is_string($value) ? $this->floor = \CasafariSDK\Enums\Api\AlertsSearchFilterV1\FloorEnum::from($value) : parent::assignMember($name, $value),
            'has_agency_name' => is_bool($value) ? $this->has_agency_name = $value : parent::assignMember($name, $value),
            'has_email' => is_bool($value) ? $this->has_email = $value : parent::assignMember($name, $value),
            'has_phone' => is_bool($value) ? $this->has_phone = $value : parent::assignMember($name, $value),
            'listing_agents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->listing_agents = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'listing_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->listing_ids = new \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\ListingIdsCollection($value) : parent::assignMember($name, $value),
            'location_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->location_ids = new \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\LocationIdsCollection($value) : parent::assignMember($name, $value),
            'new_development' => is_bool($value) ? $this->new_development = $value : parent::assignMember($name, $value),
            'operation' => is_string($value) ? $this->operation = \CasafariSDK\Enums\Api\AlertsSearchFilterV1\OperationEnum::from($value) : parent::assignMember($name, $value),
            'orientation' => is_string($value) ? $this->orientation = \CasafariSDK\Enums\Api\AlertsSearchFilterV1\OrientationEnum::from($value) : parent::assignMember($name, $value),
            'plot_area_from' => is_int($value) ? $this->plot_area_from = $value : parent::assignMember($name, $value),
            'plot_area_to' => is_int($value) ? $this->plot_area_to = $value : parent::assignMember($name, $value),
            'price_from' => is_int($value) ? $this->price_from = $value : parent::assignMember($name, $value),
            'price_per_sqm_from' => is_int($value) ? $this->price_per_sqm_from = $value : parent::assignMember($name, $value),
            'price_per_sqm_to' => is_int($value) ? $this->price_per_sqm_to = $value : parent::assignMember($name, $value),
            'price_to' => is_int($value) ? $this->price_to = $value : parent::assignMember($name, $value),
            'private' => is_bool($value) ? $this->private_ = $value : parent::assignMember($name, $value),
            'property_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->property_ids = new \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\ListingIdsCollection($value) : parent::assignMember($name, $value),
            'ref_numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ref_numbers = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'total_area_from' => is_int($value) ? $this->total_area_from = $value : parent::assignMember($name, $value),
            'total_area_to' => is_int($value) ? $this->total_area_to = $value : parent::assignMember($name, $value),
            'view' => is_string($value) ? $this->view = \CasafariSDK\Enums\Api\AlertsSearchFilterV1\ViewEnum::from($value) : parent::assignMember($name, $value),
            'with_agencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->with_agencies = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'without_agencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->without_agencies = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
