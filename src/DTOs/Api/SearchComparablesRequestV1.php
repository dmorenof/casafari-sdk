<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class SearchComparablesRequestV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'comparables_count',
    'comparables_types',
    'location_boundary',
    'operation',
];

    protected const array VALIDATION = [
    'bathrooms' => [
        'minimum' => 1.0,
        'maximum' => 15000.0,
    ],
    'bedrooms' => [
        'minimum' => 0.0,
        'maximum' => 15000.0,
    ],
    'comparables_count' => [
        'minimum' => 1.0,
        'maximum' => 50.0,
    ],
    'construction_year' => [
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
    'distance' => [
        'minimum' => 0.05,
        'maximum' => 50.0,
    ],
    'max_price' => [
        'minimum' => 1.0,
        'maximum' => 2147483647.0,
    ],
    'min_price' => [
        'minimum' => 0.0,
        'maximum' => 2147483647.0,
    ],
    'plot_area' => [
        'minimum' => 20.0,
        'maximum' => 10000000.0,
    ],
    'rooms' => [
        'minimum' => 0.0,
        'maximum' => 15000.0,
    ],
    'sold_or_rented_after' => [
        'format' => 'date',
    ],
    'total_area' => [
        'minimum' => 5.0,
        'maximum' => 10000000.0,
    ],
];

    /**
     * Number of bathrooms.
     */
    public int $bathrooms {
        set {
            $this->assigning('bathrooms', $value);
            $this->bathrooms = $value;
        }
    }
    /**
     * Number of bedrooms (cannot be used together with `rooms`).
     */
    public int $bedrooms {
        set {
            $this->assigning('bedrooms', $value);
            $this->bedrooms = $value;
        }
    }
    /**
     * Operation type.<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `operation` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\BusinessTypeEnum $business_type;
    /**
     * Property characteristics.
     */
    public \CasafariSDK\DTOs\Api\SearchComparablesRequestV1\CharacteristicsDTO $characteristics;
    /**
     * Maximum number of comparable properties in results.
     */
    public int $comparables_count {
        set {
            $this->assigning('comparables_count', $value);
            $this->comparables_count = $value;
        }
    }
    /**
     * Comparables property type, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `comparables_types` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\ComparablesTypeEnum $comparables_type;
    /**
     * <br>Country availability per type is available at the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.<br><br>Property types by type groups:<br/><strong>apartment:</strong> dachgeschosswohnung, etagenwohnung, erdgeschosswohnung, penthouse, studio, apartment, duplex<br/><strong>house:</strong> zweifamilienhaus, palace, chalet, reihenendhaus, reihenmittelhaus, townhouse, einfamilienhaus, bungalow, family_house (<span style="color:red">DEPRECATED</span>), country_house, house, landwirtschaftliche_betriebe, reihenhaus, country_estate, villa<br/><strong>room:</strong> room<br/><strong>building:</strong> apartment_building, office_building, mix_use_building<br/><strong>investment:</strong> werkstatt, retail, hotel, industrial, office, other_commercial, warehouse, restaurant<br/><strong>plot:</strong> plot (<span style="color:red">DEPRECATED</span>), urban_plot, rural_plot<br/><strong>other:</strong> parking, garage, other<br/><br/><i><span style="color:red">Note that you can select multiple types only from one property type group.</span></i>
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV1\ComparablesTypesCollection $comparables_types;
    /**
     * Property condition, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\ConditionEnum $condition;
    /**
     * Desired construction year.
     */
    public int $construction_year {
        set {
            $this->assigning('construction_year', $value);
            $this->construction_year = $value;
        }
    }
    /**
     * Target point coordinates to search around. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `target_point.coordinates` field instead.</strong>
     */
    public \CasafariSDK\DTOs\Api\SearchComparablesRequestV1\CoordinatesDTO $coordinates;
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
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\DirectionEnum $direction;
    /**
     * List of cardinal directions the property faces.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV1\DirectionsCollection $directions;
    /**
     * Maximum distance in kilometers from the requested `target_point` to comparable properties.<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `location_boundary.circle` field instead.</strong>
     */
    public float $distance {
        set {
            $this->assigning('distance', $value);
            $this->distance = $value;
        }
    }
    /**
     * Energy certificate. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `energy_ratings` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\EnergyCertificateEnum $energy_certificate;
    /**
     * List of energy certificates. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `energy_ratings` field instead.</strong>
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV1\EnergyCertificatesCollection $energy_certificates;
    /**
     * List of energy ratings.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV1\EnergyRatingsCollection $energy_ratings;
    /**
     * Exclude properties that are significantly underpriced or overpriced compared to similar properties.
     */
    public bool $exclude_outliers;
    /**
     * Floor type. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `floors` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\FloorEnum $floor;
    /**
     * Desired list of floor numbers. Negative values indicate underground floors (e.g. basements).<br>Minimum value is -250.<br>Maximum value is 250.
     */
    public \CasafariSDK\Collections\Api\ComparablesPricesRequestV1\FloorNumberCollection $floor_number;
    /**
     * List of floor types.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV1\FloorsCollection $floors;
    /**
     * Location to search within. Can be defined as a polygon of geo-points or a circle with a given target point and a distance. Only one value should be provided.
     */
    public \CasafariSDK\DTOs\Api\SearchComparablesRequestV1\LocationBoundaryDTO $location_boundary;
    /**
     * The maximum price filter for comparables result.
     */
    public int $max_price {
        set {
            $this->assigning('max_price', $value);
            $this->max_price = $value;
        }
    }
    /**
     * The minimum price filter for comparables result.
     */
    public int $min_price {
        set {
            $this->assigning('min_price', $value);
            $this->min_price = $value;
        }
    }
    /**
     * Operation type.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\OperationEnum $operation;
    /**
     * Property view orientation.
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\OrientationEnum $orientation;
    /**
     * Desired plot area, square meters. This field is required for `rural_plot` and `urban_plot` property types if `target_point.cadastral_reference` is not provided.
     */
    public int $plot_area {
        set {
            $this->assigning('plot_area', $value);
            $this->plot_area = $value;
        }
    }
    /**
     * Comparables property type, as returned by the [GET /api/v1/references/types](/#operation/api__get__v1__references__types) endpoint.<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `comparables_types` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\PropertyTypeEnum $property_type;
    /**
     * Number of rooms (cannot be used together with `bedrooms`).
     */
    public int $rooms {
        set {
            $this->assigning('rooms', $value);
            $this->rooms = $value;
        }
    }
    /**
     * Properties sold/rented since this date (in the format `YYYY-MM-DD`) will be considered as possible comparables. Default value: 9 months ago, counting from today. If `null` is passed, only active properties will be considered.
     * Format: date
     */
    public ?string $sold_or_rented_after {
        set {
            $this->assigning('sold_or_rented_after', $value);
            $this->sold_or_rented_after = $value;
        }
    }
    /**
     * Target point to search around. Can be defined as coordinates, address or cadastral reference of the property. Only one value should be provided.<br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `location_boundary.circle` field instead.</strong>
     */
    public \CasafariSDK\DTOs\Api\SearchComparablesRequestV1\TargetPointDTO $target_point;
    /**
     * Desired total area, square meters. This field is required for `hotel`, `industrial`, `office`, `other_commercial`, `restaurant`, `retail`, `warehouse`, `werkstatt` property types if `target_point.cadastral_reference` is not provided.
     */
    public int $total_area {
        set {
            $this->assigning('total_area', $value);
            $this->total_area = $value;
        }
    }
    /**
     * View from the property. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `views` field instead.</strong>
     */
    public \CasafariSDK\Enums\Api\SearchComparablesRequestV1\ViewEnum $view;
    /**
     * List of views from the property.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV1\ViewsCollection $views;
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
            'bathrooms' => is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'bedrooms' => is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'business_type' => is_string($value) ? $this->business_type = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\BusinessTypeEnum::from($value) : parent::assignMember($name, $value),
            'comparables_count' => is_int($value) ? $this->comparables_count = $value : parent::assignMember($name, $value),
            'comparables_type' => is_string($value) ? $this->comparables_type = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\ComparablesTypeEnum::from($value) : parent::assignMember($name, $value),
            'condition' => is_string($value) ? $this->condition = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\ConditionEnum::from($value) : parent::assignMember($name, $value),
            'construction_year' => is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'days_on_market_from' => is_int($value) ? $this->days_on_market_from = $value : parent::assignMember($name, $value),
            'days_on_market_to' => is_int($value) ? $this->days_on_market_to = $value : parent::assignMember($name, $value),
            'direction' => is_string($value) ? $this->direction = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\DirectionEnum::from($value) : parent::assignMember($name, $value),
            'distance' => is_float($value) ? $this->distance = $value : parent::assignMember($name, $value),
            'energy_certificate' => is_string($value) ? $this->energy_certificate = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\EnergyCertificateEnum::from($value) : parent::assignMember($name, $value),
            'exclude_outliers' => is_bool($value) ? $this->exclude_outliers = $value : parent::assignMember($name, $value),
            'floor' => is_string($value) ? $this->floor = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\FloorEnum::from($value) : parent::assignMember($name, $value),
            'floor_number' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->floor_number = new \CasafariSDK\Collections\Api\ComparablesPricesRequestV1\FloorNumberCollection($value) : parent::assignMember($name, $value),
            'max_price' => is_int($value) ? $this->max_price = $value : parent::assignMember($name, $value),
            'min_price' => is_int($value) ? $this->min_price = $value : parent::assignMember($name, $value),
            'operation' => is_string($value) ? $this->operation = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\OperationEnum::from($value) : parent::assignMember($name, $value),
            'orientation' => is_string($value) ? $this->orientation = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\OrientationEnum::from($value) : parent::assignMember($name, $value),
            'plot_area' => is_int($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'property_type' => is_string($value) ? $this->property_type = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\PropertyTypeEnum::from($value) : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'sold_or_rented_after' => $value === null || is_string($value) ? $this->sold_or_rented_after = $value : parent::assignMember($name, $value),
            'total_area' => is_int($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'view' => is_string($value) ? $this->view = \CasafariSDK\Enums\Api\SearchComparablesRequestV1\ViewEnum::from($value) : parent::assignMember($name, $value),
            'with_agencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->with_agencies = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'without_agencies' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->without_agencies = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
