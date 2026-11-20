<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\Analysis;

/**
 * AnalysisRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'business_type',
    'custom_location_boundary',
    'types',
];

    protected const array VALIDATION = [
    'conditions' => [
        'minItems' => 1,
    ],
    'directions' => [
        'minItems' => 1,
    ],
    'energy_ratings' => [
        'minItems' => 1,
    ],
    'floors' => [
        'minItems' => 1,
    ],
    'orientations' => [
        'minItems' => 1,
    ],
    'types' => [
        'minItems' => 1,
    ],
    'views' => [
        'minItems' => 1,
    ],
];

    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema4 $bathrooms_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema3 $bedrooms_range;
    /**
     * Operation type for which the property is available.
     */
    public \CasafariSDK\Enums\MarketAnalyticsApi\BusinessTypeEnum $business_type;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Characteristics\RequestSchema $characteristics;
    /**
     * Property conditions, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public ?\CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\ConditionsCollection $conditions {
        set {
            $this->assigning('conditions', $value);
            $this->conditions = $value;
        }
    }
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema7 $construction_year_range;
    public \CasafariSDK\DTOs\MarketAnalyticsApi\LocationBoundarySchema $custom_location_boundary;
    /**
     * List of cardinal directions the property faces.
     */
    public ?\CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\DirectionsCollection $directions {
        set {
            $this->assigning('directions', $value);
            $this->directions = $value;
        }
    }
    /**
     * List of energy ratings that attests to the energy efficiency of the property.
     */
    public ?\CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\EnergyRatingsCollection $energy_ratings {
        set {
            $this->assigning('energy_ratings', $value);
            $this->energy_ratings = $value;
        }
    }
    /**
     * List of floor types.
     */
    public ?\CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\FloorsCollection $floors {
        set {
            $this->assigning('floors', $value);
            $this->floors = $value;
        }
    }
    /**
     * Property view orientation.
     */
    public ?\CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\OrientationsCollection $orientations {
        set {
            $this->assigning('orientations', $value);
            $this->orientations = $value;
        }
    }
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema6 $plot_area_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema1 $price_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema2 $rooms_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema5 $total_area_range;
    /**
     * The list of property types by type groups:<br/><strong>apartment: </strong>["apartment", "studio", "duplex", "penthouse", "dachgeschosswohnung", "etagenwohnung", "erdgeschosswohnung"]<br/><strong>house: </strong>["country_house", "house", "palace", "townhouse", "villa", "country_estate", "chalet", "bungalow", "family_house", "reihenhaus", "reihenendhaus", "reihenmittelhaus", "einfamilienhaus", "zweifamilienhaus", "landwirtschaftliche_betriebe"]<br/><strong>room: </strong>["room"]<br/><strong>building: </strong>["apartment_building", "office_building", "mix_use_building"]<br/><strong>investment: </strong>["retail", "office", "industrial", "warehouse", "hotel", "building", "other_commercial", "restaurant", "werkstatt"]<br/><strong>development: </strong>["apartment_development", "house_development"]<br/><strong>plot: </strong>["urban_plot", "rural_plot"]<br/><strong>other: </strong>["parking", "garage", "other"]<br/><br/><i>Note that you can select multiple types only from one property type group.</i><br><br><span style="color:red">The list of property types specific to certain countries</span>:<br/><strong>apartment:</strong><br/>&#9675; dachgeschosswohnung: <strong>Germany</strong><br/>&#9675; etagenwohnung: <strong>Germany</strong><br/>&#9675; erdgeschosswohnung: <strong>Germany</strong><br/><strong>house:</strong><br/>&#9675; family_house: <strong>Germany</strong><br/>&#9675; reihenhaus: <strong>Germany</strong><br/>&#9675; reihenendhaus: <strong>Germany</strong><br/>&#9675; reihenmittelhaus: <strong>Germany</strong><br/>&#9675; einfamilienhaus: <strong>Germany</strong><br/>&#9675; zweifamilienhaus: <strong>Germany</strong><br/>&#9675; landwirtschaftliche_betriebe: <strong>Germany</strong><br/><strong>investment:</strong><br/>&#9675; restaurant: <strong>Germany</strong><br/>&#9675; werkstatt: <strong>Germany</strong><br/><strong>plot:</strong><br/>&#9675; urban_plot: <strong>Italy, Germany, Portugal, Spain, France</strong><br/>&#9675; rural_plot: <strong>Italy, Germany, Portugal, Spain, France</strong>
     */
    public \CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\TypesCollection $types {
        set {
            $this->assigning('types', $value);
            $this->types = $value;
        }
    }
    /**
     * List of views from the property.
     */
    public ?\CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\ViewsCollection $views {
        set {
            $this->assigning('views', $value);
            $this->views = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'bathrooms_range' => $value === null || $value instanceof \stdClass ? $this->bathrooms_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema4($value) : parent::assignMember($name, $value),
            'bedrooms_range' => $value === null || $value instanceof \stdClass ? $this->bedrooms_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema3($value) : parent::assignMember($name, $value),
            'business_type' => is_string($value) ? $this->business_type = \CasafariSDK\Enums\MarketAnalyticsApi\BusinessTypeEnum::from($value) : parent::assignMember($name, $value),
            'characteristics' => $value === null || $value instanceof \stdClass ? $this->characteristics = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Characteristics\RequestSchema($value) : parent::assignMember($name, $value),
            'construction_year_range' => $value === null || $value instanceof \stdClass ? $this->construction_year_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema7($value) : parent::assignMember($name, $value),
            'custom_location_boundary' => $value instanceof \stdClass ? $this->custom_location_boundary = new \CasafariSDK\DTOs\MarketAnalyticsApi\LocationBoundarySchema($value) : parent::assignMember($name, $value),
            'plot_area_range' => $value === null || $value instanceof \stdClass ? $this->plot_area_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema6($value) : parent::assignMember($name, $value),
            'price_range' => $value === null || $value instanceof \stdClass ? $this->price_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema1($value) : parent::assignMember($name, $value),
            'rooms_range' => $value === null || $value instanceof \stdClass ? $this->rooms_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema2($value) : parent::assignMember($name, $value),
            'total_area_range' => $value === null || $value instanceof \stdClass ? $this->total_area_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema5($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
