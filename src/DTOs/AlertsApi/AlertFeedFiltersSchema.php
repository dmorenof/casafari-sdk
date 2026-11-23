<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi;

/**
 * AlertFeedFiltersSchema
 */
final class AlertFeedFiltersSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'business_type',
];

    protected const array PROPERTY_MAP = [
    'private' => 'private_',
];
    protected const array WIRE_PROPERTY_MAP = [
    'private_' => 'private',
];

    protected const array VALIDATION = [
    'characteristics' => [
        'minItems' => 1,
    ],
    'conditions' => [
        'minItems' => 1,
    ],
    'custom_locations' => [
        'minItems' => 1,
        'maxItems' => 4,
    ],
    'directions' => [
        'minItems' => 1,
    ],
    'floors' => [
        'minItems' => 1,
    ],
    'listing_ids' => [
        'minItems' => 1,
        'maxItems' => 100,
    ],
    'location_ids' => [
        'minItems' => 1,
        'maxItems' => 100,
    ],
    'ref_numbers' => [
        'minItems' => 1,
        'maxItems' => 100,
    ],
    'statuses' => [
        'minItems' => 1,
    ],
    'types' => [
        'minItems' => 1,
    ],
    'views' => [
        'minItems' => 1,
    ],
];

    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\AlertSubtypesCollection $alert_subtypes;
    public ?bool $auction;
    public ?bool $bank;
    public ?\CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema3 $bathrooms_range;
    public ?\CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema4 $bedrooms_range;
    public \CasafariSDK\Enums\AlertsApi\OperationEnum $business_type;
    /**
     * A matching listing must have every requested characteristic, not just one.
     */
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\CharacteristicsCollection $characteristics {
        set {
            $this->assigning('characteristics', $value);
            $this->characteristics = $value;
        }
    }
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\ConditionsCollection $conditions {
        set {
            $this->assigning('conditions', $value);
            $this->conditions = $value;
        }
    }
    public ?\CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema6 $construction_year_range;
    /**
     * List of closed polygons of geo-points to search within. Each polygon must contain at least 4 points. First and last points must match in each polygon. Maximum 4 polygons allowed.
     */
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\CustomLocationsArray\CustomLocationsCollection $custom_locations {
        set {
            $this->assigning('custom_locations', $value);
            $this->custom_locations = $value;
        }
    }
    /**
     * A matching listing must face every requested direction, not just one.
     */
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\DirectionsCollection $directions {
        set {
            $this->assigning('directions', $value);
            $this->directions = $value;
        }
    }
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\FloorsCollection $floors {
        set {
            $this->assigning('floors', $value);
            $this->floors = $value;
        }
    }
    public ?bool $has_agency_name;
    public ?bool $has_email;
    public ?bool $has_phone;
    public ?\CasafariSDK\Collections\IntegerCollection $listing_ids {
        set {
            $this->assigning('listing_ids', $value);
            $this->listing_ids = $value;
        }
    }
    public ?\CasafariSDK\Collections\IntegerCollection $location_ids {
        set {
            $this->assigning('location_ids', $value);
            $this->location_ids = $value;
        }
    }
    public ?bool $new_development;
    public ?\CasafariSDK\Enums\AlertsApi\OrientationEnum $orientation;
    public ?\CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema7 $plot_area_range;
    public ?\CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema2 $price_psqm_range;
    public ?\CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema1 $price_range;
    public ?bool $private_;
    public ?\CasafariSDK\Collections\StringCollection $ref_numbers {
        set {
            $this->assigning('ref_numbers', $value);
            $this->ref_numbers = $value;
        }
    }
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\StatusesCollection $statuses {
        set {
            $this->assigning('statuses', $value);
            $this->statuses = $value;
        }
    }
    public ?\CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema5 $total_area_range;
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\TypesCollection $types {
        set {
            $this->assigning('types', $value);
            $this->types = $value;
        }
    }
    /**
     * A matching listing must have every requested view, not just one.
     */
    public ?\CasafariSDK\Collections\AlertsApi\AlertFeedFiltersSchema\ViewsCollection $views {
        set {
            $this->assigning('views', $value);
            $this->views = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'auction' => $value === null || is_bool($value) ? $this->auction = $value : parent::assignMember($name, $value),
            'bank' => $value === null || is_bool($value) ? $this->bank = $value : parent::assignMember($name, $value),
            'bathrooms_range' => $value === null || $value instanceof \stdClass ? $this->bathrooms_range = $value === null ? null : new \CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema3($value) : parent::assignMember($name, $value),
            'bedrooms_range' => $value === null || $value instanceof \stdClass ? $this->bedrooms_range = $value === null ? null : new \CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema4($value) : parent::assignMember($name, $value),
            'business_type' => is_string($value) ? $this->business_type = \CasafariSDK\Enums\AlertsApi\OperationEnum::from($value) : parent::assignMember($name, $value),
            'construction_year_range' => $value === null || $value instanceof \stdClass ? $this->construction_year_range = $value === null ? null : new \CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema6($value) : parent::assignMember($name, $value),
            'has_agency_name' => $value === null || is_bool($value) ? $this->has_agency_name = $value : parent::assignMember($name, $value),
            'has_email' => $value === null || is_bool($value) ? $this->has_email = $value : parent::assignMember($name, $value),
            'has_phone' => $value === null || is_bool($value) ? $this->has_phone = $value : parent::assignMember($name, $value),
            'listing_ids' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->listing_ids = $value === null ? null : new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'location_ids' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item))) ? $this->location_ids = $value === null ? null : new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'new_development' => $value === null || is_bool($value) ? $this->new_development = $value : parent::assignMember($name, $value),
            'orientation' => $value === null || is_string($value) ? $this->orientation = $value === null ? null : \CasafariSDK\Enums\AlertsApi\OrientationEnum::from($value) : parent::assignMember($name, $value),
            'plot_area_range' => $value === null || $value instanceof \stdClass ? $this->plot_area_range = $value === null ? null : new \CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema7($value) : parent::assignMember($name, $value),
            'price_psqm_range' => $value === null || $value instanceof \stdClass ? $this->price_psqm_range = $value === null ? null : new \CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema2($value) : parent::assignMember($name, $value),
            'price_range' => $value === null || $value instanceof \stdClass ? $this->price_range = $value === null ? null : new \CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema1($value) : parent::assignMember($name, $value),
            'private' => $value === null || is_bool($value) ? $this->private_ = $value : parent::assignMember($name, $value),
            'ref_numbers' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->ref_numbers = $value === null ? null : new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'total_area_range' => $value === null || $value instanceof \stdClass ? $this->total_area_range = $value === null ? null : new \CasafariSDK\DTOs\AlertsApi\Ranges\IntRangeSchema5($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
