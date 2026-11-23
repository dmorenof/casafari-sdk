<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistribution;

/**
 * PropertiesDistributionResponseSchema
 */
final class ResponseSchema extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'properties',
    'quartiles',
];

    /**
     * List of properties that participated in the distribution.
     */
    public \CasafariSDK\Collections\MarketAnalyticsApi\PropertiesDistribution\ResponseSchema\PropertiesCollection $properties;
    /**
     * The quantiles that divide the properties distribution into four parts.
     */
    public \CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistributionQuartiles $quartiles;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'properties' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->properties = new \CasafariSDK\Collections\MarketAnalyticsApi\PropertiesDistribution\ResponseSchema\PropertiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistributionUnit::class)) : parent::assignMember($name, $value),
            'quartiles' => $value instanceof \stdClass ? $this->quartiles = new \CasafariSDK\DTOs\MarketAnalyticsApi\PropertiesDistributionQuartiles($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
