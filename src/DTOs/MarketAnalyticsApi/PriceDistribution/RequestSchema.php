<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\PriceDistribution;

/**
 * PriceDistributionRequestSchema
 */
final class RequestSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'business_type',
    'custom_location_boundary',
    'types',
];

    protected const array PROPERTY_MAP = [
    'private' => 'private_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'private_' => 'private',
];

    protected const array VALIDATION = [
    'conditions' => [
        'minItems' => 1,
    ],
    'types' => [
        'minItems' => 1,
    ],
];

    /**
     * Whether the property is the subject of an auction.
     */
    public bool $auction;
    /**
     * Whether the property is owned by the bank.
     */
    public bool $bank;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema12 $bathrooms_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema11 $bedrooms_range;
    public \CasafariSDK\Enums\MarketAnalyticsApi\BusinessTypeEnum $business_type;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Characteristics\RequestSchema $characteristics;
    /**
     * Property conditions, as returned by the [GET /api/v1/references/conditions](/#operation/api__get__v1__references__conditions) endpoint.
     */
    public \CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\ConditionsCollection $conditions {
        set {
            $this->assigning('conditions', $value);
            $this->conditions = $value;
        }
    }
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema15 $construction_year_range;
    public \CasafariSDK\DTOs\MarketAnalyticsApi\LocationBoundarySchema $custom_location_boundary;
    /**
     * Exclude properties that are significantly underpriced or overpriced compared to similar properties.
     */
    public bool $exclude_outliers;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema14 $plot_area_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema9 $price_per_sqm_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema8 $price_range;
    /**
     * Whether the property is listed by a private individual, as opposed to an agent or a professional.
     */
    public bool $private_;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema10 $rooms_range;
    public ?\CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema13 $total_area_range;
    /**
     * The list of property types by type groups:<br/><strong>apartment: </strong>["apartment", "studio", "duplex", "penthouse", "dachgeschosswohnung", "etagenwohnung", "erdgeschosswohnung"]<br/><strong>house: </strong>["country_house", "house", "palace", "townhouse", "villa", "country_estate", "chalet", "bungalow", "family_house", "reihenhaus", "reihenendhaus", "reihenmittelhaus", "einfamilienhaus", "zweifamilienhaus", "landwirtschaftliche_betriebe"]<br/><strong>room: </strong>["room"]<br/><strong>building: </strong>["apartment_building", "office_building", "mix_use_building"]<br/><strong>investment: </strong>["retail", "office", "industrial", "warehouse", "hotel", "building", "other_commercial", "restaurant", "werkstatt"]<br/><strong>development: </strong>["apartment_development", "house_development"]<br/><strong>plot: </strong>["urban_plot", "rural_plot"]<br/><strong>other: </strong>["parking", "garage", "other"]<br/><br/><i>Note that you can select multiple types only from one property type group.</i><br><br><span style="color:red">The list of property types specific to certain countries</span>:<br/><strong>apartment:</strong><br/>&#9675; dachgeschosswohnung: <strong>Germany</strong><br/>&#9675; etagenwohnung: <strong>Germany</strong><br/>&#9675; erdgeschosswohnung: <strong>Germany</strong><br/><strong>house:</strong><br/>&#9675; family_house: <strong>Germany</strong><br/>&#9675; reihenhaus: <strong>Germany</strong><br/>&#9675; reihenendhaus: <strong>Germany</strong><br/>&#9675; reihenmittelhaus: <strong>Germany</strong><br/>&#9675; einfamilienhaus: <strong>Germany</strong><br/>&#9675; zweifamilienhaus: <strong>Germany</strong><br/>&#9675; landwirtschaftliche_betriebe: <strong>Germany</strong><br/><strong>investment:</strong><br/>&#9675; restaurant: <strong>Germany</strong><br/>&#9675; werkstatt: <strong>Germany</strong><br/><strong>plot:</strong><br/>&#9675; urban_plot: <strong>Italy, Germany, Portugal, Spain, France</strong><br/>&#9675; rural_plot: <strong>Italy, Germany, Portugal, Spain, France</strong>
     */
    public \CasafariSDK\Collections\MarketAnalyticsApi\Analysis\Request\TypesCollection $types {
        set {
            $this->assigning('types', $value);
            $this->types = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'auction' => is_bool($value) ? $this->auction = $value : parent::assignMember($name, $value),
            'bank' => is_bool($value) ? $this->bank = $value : parent::assignMember($name, $value),
            'bathrooms_range' => $value === null || $value instanceof \stdClass ? $this->bathrooms_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema12($value) : parent::assignMember($name, $value),
            'bedrooms_range' => $value === null || $value instanceof \stdClass ? $this->bedrooms_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema11($value) : parent::assignMember($name, $value),
            'business_type' => is_string($value) ? $this->business_type = \CasafariSDK\Enums\MarketAnalyticsApi\BusinessTypeEnum::from($value) : parent::assignMember($name, $value),
            'characteristics' => $value === null || $value instanceof \stdClass ? $this->characteristics = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Characteristics\RequestSchema($value) : parent::assignMember($name, $value),
            'construction_year_range' => $value === null || $value instanceof \stdClass ? $this->construction_year_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema15($value) : parent::assignMember($name, $value),
            'custom_location_boundary' => $value instanceof \stdClass ? $this->custom_location_boundary = new \CasafariSDK\DTOs\MarketAnalyticsApi\LocationBoundarySchema($value) : parent::assignMember($name, $value),
            'exclude_outliers' => is_bool($value) ? $this->exclude_outliers = $value : parent::assignMember($name, $value),
            'plot_area_range' => $value === null || $value instanceof \stdClass ? $this->plot_area_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema14($value) : parent::assignMember($name, $value),
            'price_per_sqm_range' => $value === null || $value instanceof \stdClass ? $this->price_per_sqm_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema9($value) : parent::assignMember($name, $value),
            'price_range' => $value === null || $value instanceof \stdClass ? $this->price_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema8($value) : parent::assignMember($name, $value),
            'private' => is_bool($value) ? $this->private_ = $value : parent::assignMember($name, $value),
            'rooms_range' => $value === null || $value instanceof \stdClass ? $this->rooms_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema10($value) : parent::assignMember($name, $value),
            'total_area_range' => $value === null || $value instanceof \stdClass ? $this->total_area_range = $value === null ? null : new \CasafariSDK\DTOs\MarketAnalyticsApi\Ranges\IntRangeSchema13($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
