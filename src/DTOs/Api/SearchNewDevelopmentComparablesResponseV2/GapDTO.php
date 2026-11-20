<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2;

/**
 * New development vs resale asking price per square meter gap, `null` unless `include_gap` is `true`. It is an observation only and is not applied to `estimated_prices`.
 */
final class GapDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'difference_per_sqm',
    'difference_percent',
    'new_development_average_price_per_sqm',
    'new_development_comparables_count',
    'observation',
    'resale_average_price_per_sqm',
    'resale_comparables_count',
];

    /**
     * New development minus resale average price per square meter. A negative value means new development is cheaper than resale.
     */
    public ?float $difference_per_sqm;
    /**
     * Difference relative to the resale average price per square meter, in percent.
     */
    public ?float $difference_percent;
    /**
     * Average asking price per square meter of the new development comparables.
     */
    public ?float $new_development_average_price_per_sqm;
    /**
     * Number of the new development comparables.
     */
    public int $new_development_comparables_count;
    /**
     * Label of the observation.
     */
    public string $observation;
    /**
     * Average asking price per square meter of the resale comparables found with the same parameters.
     */
    public ?float $resale_average_price_per_sqm;
    /**
     * Number of the resale comparables.
     */
    public int $resale_comparables_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'difference_per_sqm' => $value === null || is_float($value) ? $this->difference_per_sqm = $value : parent::assignMember($name, $value),
            'difference_percent' => $value === null || is_float($value) ? $this->difference_percent = $value : parent::assignMember($name, $value),
            'new_development_average_price_per_sqm' => $value === null || is_float($value) ? $this->new_development_average_price_per_sqm = $value : parent::assignMember($name, $value),
            'new_development_comparables_count' => is_int($value) ? $this->new_development_comparables_count = $value : parent::assignMember($name, $value),
            'observation' => is_string($value) ? $this->observation = $value : parent::assignMember($name, $value),
            'resale_average_price_per_sqm' => $value === null || is_float($value) ? $this->resale_average_price_per_sqm = $value : parent::assignMember($name, $value),
            'resale_comparables_count' => is_int($value) ? $this->resale_comparables_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
