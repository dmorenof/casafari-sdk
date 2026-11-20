<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\MarketMedian;

/**
 * MarketMedianRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'country_id',
    'location_id',
    'operation',
    'type_ids',
];

    protected const array VALIDATION = [
    'type_ids' => [
        'minItems' => 1,
    ],
];

    public int $country_id;
    /**
     * Exclude properties that are significantly underpriced or overpriced compared to similar properties.
     */
    public bool $exclude_outliers;
    public int $location_id;
    public \CasafariSDK\Enums\MarketAnalyticsApi\BusinessTypeEnum $operation;
    public \CasafariSDK\Collections\MarketAnalyticsApi\MarketMedian\Request\TypeIdsCollection $type_ids {
        set {
            $this->assigning('type_ids', $value);
            $this->type_ids = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country_id' => is_int($value) ? $this->country_id = $value : parent::assignMember($name, $value),
            'exclude_outliers' => is_bool($value) ? $this->exclude_outliers = $value : parent::assignMember($name, $value),
            'location_id' => is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'operation' => is_string($value) ? $this->operation = \CasafariSDK\Enums\MarketAnalyticsApi\BusinessTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
