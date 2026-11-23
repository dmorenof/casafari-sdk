<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchResponseV2;

/**
 * Retail-related attributes of the property. Null for non-commercial properties or if the retail data is not available.
 */
final class RetailDataDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'facade_measurements',
    'is_street_level',
    'number_of_floors',
    'number_of_premises',
    'possible_business_types',
    'transfer_price_range',
];

    /**
     * Facade measurements of the commercial property (height, length, surface in meters).
     */
    public ?\CasafariSDK\DTOs\Api\PropertiesSearchResponseV2\RetailData\FacadeMeasurementsDTO $facade_measurements;
    /**
     * Whether the commercial entrance is situated at the street level, without having to go upstairs/downstairs to reach it.
     */
    public ?bool $is_street_level;
    /**
     * The number of commercial property floors.
     */
    public ?int $number_of_floors;
    /**
     * The number of property usable rooms/premises.
     */
    public ?int $number_of_premises;
    /**
     * What kind of business can/did run in this commercial property (e.g. cafe, restaurant, grocery store, dental clinic).
     */
    public ?\CasafariSDK\Collections\StringCollection $possible_business_types;
    /**
     * Price range if the property is available for transfer.
     */
    public ?\CasafariSDK\DTOs\Api\PropertiesSearchResponseV2\RetailData\PriceRangeDTO $transfer_price_range;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'is_street_level' => $value === null || is_bool($value) ? $this->is_street_level = $value : parent::assignMember($name, $value),
            'number_of_floors' => $value === null || is_int($value) ? $this->number_of_floors = $value : parent::assignMember($name, $value),
            'number_of_premises' => $value === null || is_int($value) ? $this->number_of_premises = $value : parent::assignMember($name, $value),
            'possible_business_types' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->possible_business_types = $value === null ? null : new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
