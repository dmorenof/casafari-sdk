<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class PropertiesSearchRequestV2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'search_operations',
];

    protected const array PROPERTY_MAP = [
    'private' => 'private_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'private_' => 'private',
];

    protected const array VALIDATION = [
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
    'days_on_market_from' => [
        'minimum' => 1.0,
        'maximum' => 10000.0,
    ],
    'days_on_market_to' => [
        'minimum' => 1.0,
        'maximum' => 10000.0,
    ],
    'gross_yield_from' => [
        'minimum' => 1.0,
        'maximum' => 20.0,
    ],
    'gross_yield_to' => [
        'minimum' => 1.0,
        'maximum' => 20.0,
    ],
    'living_area_from' => [
        'minimum' => 1.0,
        'maximum' => 10000000.0,
    ],
    'living_area_to' => [
        'minimum' => 1.0,
        'maximum' => 10000000.0,
    ],
    'location_ids' => [
        'maxItems' => 100,
    ],
    'number_of_parkings_from' => [
        'minimum' => 1.0,
        'maximum' => 15000.0,
    ],
    'number_of_parkings_to' => [
        'minimum' => 1.0,
        'maximum' => 15000.0,
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
    'rooms_from' => [
        'minimum' => 1.0,
        'maximum' => 15000.0,
    ],
    'rooms_to' => [
        'minimum' => 1.0,
        'maximum' => 15000.0,
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
     * Whether to return auction properties. (If the `bank` filter is also set, the result will contain both `auction` and `bank` properties)
     */
    public bool $auction;
    /**
     * Whether to return bank properties. (If the `auction` filter is also set, the result will contain both `bank` and `auction` properties)
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
     * Whether to return properties that have at least one listing with a company connected to Casafari Connect.
     */
    public bool $casafari_connect;
    /**
     * Property characteristics.<br/><strong>The field was changed from Array of strings to object.</strong><br/><strong>Backwards compatibility is still supported.</strong>
     */
    public \CasafariSDK\DTOs\Api\PropertiesSearchRequestV2\CharacteristicsDTO $characteristics;
    /**
     * Property condition, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\ConditionsCollection $conditions;
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
     * Created date from (in the format `YYYY-MM-DDTHH:mm:ss`).
     * Format: date-time
     */
    public string $created_date_from;
    /**
     * Created date to (in the format `YYYY-MM-DDTHH:mm:ss`).
     * Format: date-time
     */
    public string $created_date_to;
    /**
     * Custom location to search within. Can be defined as a polygon of geo-points or a circle with a given target point and a distance. Only one value should be provided.
     */
    public \CasafariSDK\DTOs\Api\PropertiesSearchRequestV2\LocationBoundaryDTO $custom_location_boundary;
    /**
     * Minimum days on market value.
     */
    public int $days_on_market_from {
        set {
            $this->assigning('days_on_market_from', $value);
            $this->days_on_market_from = $value;
        }
    }
    /**
     * Maximum days on market value.
     */
    public int $days_on_market_to {
        set {
            $this->assigning('days_on_market_to', $value);
            $this->days_on_market_to = $value;
        }
    }
    /**
     * Cardinal direction the property faces. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `directions` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\DirectionEnum $direction;
    /**
     * List of cardinal directions the property faces.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\DirectionsCollection $directions;
    /**
     * Energy certificate. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `energy_ratings` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\EnergyCertificateEnum $energy_certificate;
    /**
     * List of energy certificates. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `energy_ratings` field instead.</strong>
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\EnergyCertificatesCollection $energy_certificates;
    /**
     * List of energy ratings.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\EnergyRatingsCollection $energy_ratings;
    /**
     * Whether to return properties that are available on market exclusively from a single agency or private individual.<br/>Can be passed only along with at least one of the fields: `private`, `with_agencies`, `without_agencies`.
     */
    public bool $exclusive;
    /**
     * Floor type. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `floors` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\FloorEnum $floor;
    /**
     * Desired list of floor numbers. Negative values indicate underground floors (e.g. basements).<br>Minimum value is -250.<br>Maximum value is 250.
     */
    public \CasafariSDK\Collections\Api\ComparablesPricesRequestV1\FloorNumberCollection $floor_numbers;
    /**
     * List of floor types.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\FloorsCollection $floors;
    /**
     * Minimum gross yield value.
     */
    public float $gross_yield_from {
        set {
            $this->assigning('gross_yield_from', $value);
            $this->gross_yield_from = $value;
        }
    }
    /**
     * Maximum gross yield value.
     */
    public float $gross_yield_to {
        set {
            $this->assigning('gross_yield_to', $value);
            $this->gross_yield_to = $value;
        }
    }
    /**
     * Return properties from specified agents. To find allowed agent names use the [GET /api/v1/references/agents](/#operation/api__get__v1__references__agents) endpoint.
     */
    public \CasafariSDK\Collections\StringCollection $listing_agents;
    /**
     * Minimum living area.
     */
    public int $living_area_from {
        set {
            $this->assigning('living_area_from', $value);
            $this->living_area_from = $value;
        }
    }
    /**
     * Maximum living area.
     */
    public int $living_area_to {
        set {
            $this->assigning('living_area_to', $value);
            $this->living_area_to = $value;
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
     * Minimum number of parking spaces.
     */
    public int $number_of_parkings_from {
        set {
            $this->assigning('number_of_parkings_from', $value);
            $this->number_of_parkings_from = $value;
        }
    }
    /**
     * Maximum number of parking spaces.
     */
    public int $number_of_parkings_to {
        set {
            $this->assigning('number_of_parkings_to', $value);
            $this->number_of_parkings_to = $value;
        }
    }
    /**
     * Property view orientation.
     */
    public \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\OrientationEnum $orientation;
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
     * Whether to return properties listed by a private individual, as opposed to an agent or a professional.
     */
    public bool $private_;
    /**
     * Start date (in the format `YYYY-MM-DD`) of the period for property of interest.
     * Format: date
     */
    public string $property_date_from;
    /**
     * End date (in the format `YYYY-MM-DD`) of the period for property of interest.
     * Format: date
     */
    public string $property_date_to;
    /**
     * Property types, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `types` field instead.</strong>
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\PropertyTypesCollection $property_types;
    /**
     * List of reference numbers from listings.
     */
    public \CasafariSDK\Collections\StringCollection $ref_numbers;
    /**
     * Minimum number of rooms.
     */
    public int $rooms_from {
        set {
            $this->assigning('rooms_from', $value);
            $this->rooms_from = $value;
        }
    }
    /**
     * Maximum number of rooms.
     */
    public int $rooms_to {
        set {
            $this->assigning('rooms_to', $value);
            $this->rooms_to = $value;
        }
    }
    /**
     * Search business types for which the property is available.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\SearchOperationsCollection $search_operations;
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
     * <br>Country availability per type is available at the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.<br><br>Property types by type groups:<br/><strong>apartment:</strong> etagenwohnung, erdgeschosswohnung, apartment, penthouse, dachgeschosswohnung, duplex, studio<br/><strong>house:</strong> reihenhaus, reihenmittelhaus, chalet, palace, villa, einfamilienhaus, landwirtschaftliche_betriebe, zweifamilienhaus, bungalow, house, reihenendhaus, family_house (<span style="color:red">DEPRECATED</span>), townhouse, country_house, country_estate<br/><strong>room:</strong> room<br/><strong>building:</strong> office_building, apartment_building, mix_use_building<br/><strong>investment:</strong> industrial, werkstatt, warehouse, office, other_commercial, retail, hotel, restaurant<br/><strong>plot:</strong> rural_plot, plot (<span style="color:red">DEPRECATED</span>), urban_plot<br/><strong>other:</strong> parking, garage, other
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\TypesCollection $types;
    /**
     * Updated date from (in the format `YYYY-MM-DDTHH:mm:ss`).
     * Format: date-time
     */
    public string $updated_date_from;
    /**
     * Updated date to (in the format `YYYY-MM-DDTHH:mm:ss`).
     * Format: date-time
     */
    public string $updated_date_to;
    /**
     * View from the property. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `views` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\ViewEnum $view;
    /**
     * List of views from the property.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV2\ViewsCollection $views;
    /**
     * Return properties from specified agencies, companies or sources. To find allowed agency names use the [GET /api/v1/references/agencies](/#operation/api__get__v1__references__agencies) endpoint.
     */
    public \CasafariSDK\Collections\StringCollection $with_agencies;
    /**
     * Exclude properties from specified agencies, companies or sources. To find allowed agency names use the [GET /api/v1/references/agencies](/#operation/api__get__v1__references__agencies) endpoint.
     */
    public \CasafariSDK\Collections\StringCollection $without_agencies;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'auction' => is_bool($value) ? $this->auction = $value : parent::assignMember($name, $value),
            'bank' => is_bool($value) ? $this->bank = $value : parent::assignMember($name, $value),
            'bathrooms_from' => is_int($value) ? $this->bathrooms_from = $value : parent::assignMember($name, $value),
            'bathrooms_to' => is_int($value) ? $this->bathrooms_to = $value : parent::assignMember($name, $value),
            'bedrooms_from' => is_int($value) ? $this->bedrooms_from = $value : parent::assignMember($name, $value),
            'bedrooms_to' => is_int($value) ? $this->bedrooms_to = $value : parent::assignMember($name, $value),
            'casafari_connect' => is_bool($value) ? $this->casafari_connect = $value : parent::assignMember($name, $value),
            'construction_year_from' => is_int($value) ? $this->construction_year_from = $value : parent::assignMember($name, $value),
            'construction_year_to' => is_int($value) ? $this->construction_year_to = $value : parent::assignMember($name, $value),
            'created_date_from' => is_string($value) ? $this->created_date_from = $value : parent::assignMember($name, $value),
            'created_date_to' => is_string($value) ? $this->created_date_to = $value : parent::assignMember($name, $value),
            'days_on_market_from' => is_int($value) ? $this->days_on_market_from = $value : parent::assignMember($name, $value),
            'days_on_market_to' => is_int($value) ? $this->days_on_market_to = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\DirectionEnum::from($value) : parent::assignMember($name, $value),
            'energy_certificate' => is_string($value) ? $this->energy_certificate = \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\EnergyCertificateEnum::from($value) : parent::assignMember($name, $value),
            'exclusive' => is_bool($value) ? $this->exclusive = $value : parent::assignMember($name, $value),
            'floor' => is_string($value) ? $this->floor = \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\FloorEnum::from($value) : parent::assignMember($name, $value),
            'floor_numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->floor_numbers = new \CasafariSDK\Collections\Api\ComparablesPricesRequestV1\FloorNumberCollection($value) : parent::assignMember($name, $value),
            'gross_yield_from' => is_float($value) ? $this->gross_yield_from = $value : parent::assignMember($name, $value),
            'gross_yield_to' => is_float($value) ? $this->gross_yield_to = $value : parent::assignMember($name, $value),
            'listing_agents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->listing_agents = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'living_area_from' => is_int($value) ? $this->living_area_from = $value : parent::assignMember($name, $value),
            'living_area_to' => is_int($value) ? $this->living_area_to = $value : parent::assignMember($name, $value),
            'location_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->location_ids = new \CasafariSDK\Collections\Api\AlertsFeedV1\Filter\LocationIdsCollection($value) : parent::assignMember($name, $value),
            'number_of_parkings_from' => is_int($value) ? $this->number_of_parkings_from = $value : parent::assignMember($name, $value),
            'number_of_parkings_to' => is_int($value) ? $this->number_of_parkings_to = $value : parent::assignMember($name, $value),
            'orientation' => is_string($value) ? $this->orientation = \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\OrientationEnum::from($value) : parent::assignMember($name, $value),
            'plot_area_from' => is_int($value) ? $this->plot_area_from = $value : parent::assignMember($name, $value),
            'plot_area_to' => is_int($value) ? $this->plot_area_to = $value : parent::assignMember($name, $value),
            'price_from' => is_int($value) ? $this->price_from = $value : parent::assignMember($name, $value),
            'price_per_sqm_from' => is_int($value) ? $this->price_per_sqm_from = $value : parent::assignMember($name, $value),
            'price_per_sqm_to' => is_int($value) ? $this->price_per_sqm_to = $value : parent::assignMember($name, $value),
            'price_to' => is_int($value) ? $this->price_to = $value : parent::assignMember($name, $value),
            'private' => is_bool($value) ? $this->private_ = $value : parent::assignMember($name, $value),
            'property_date_from' => is_string($value) ? $this->property_date_from = $value : parent::assignMember($name, $value),
            'property_date_to' => is_string($value) ? $this->property_date_to = $value : parent::assignMember($name, $value),
            'ref_numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->ref_numbers = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'rooms_from' => is_int($value) ? $this->rooms_from = $value : parent::assignMember($name, $value),
            'rooms_to' => is_int($value) ? $this->rooms_to = $value : parent::assignMember($name, $value),
            'total_area_from' => is_int($value) ? $this->total_area_from = $value : parent::assignMember($name, $value),
            'total_area_to' => is_int($value) ? $this->total_area_to = $value : parent::assignMember($name, $value),
            'updated_date_from' => is_string($value) ? $this->updated_date_from = $value : parent::assignMember($name, $value),
            'updated_date_to' => is_string($value) ? $this->updated_date_to = $value : parent::assignMember($name, $value),
            'view' => is_string($value) ? $this->view = \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\ViewEnum::from($value) : parent::assignMember($name, $value),
            'with_agencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->with_agencies = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'without_agencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->without_agencies = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
