<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\Characteristics;

/**
 * CharacteristicsRequestSchema
 */
final class RequestSchema extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Exclude properties that contain any of these characteristics.
     */
    public \CasafariSDK\Collections\MarketAnalyticsApi\Characteristics\RequestSchema\ExcludeCollection $exclude;
    /**
     * Include only properties that have all these characteristics.
     */
    public \CasafariSDK\Collections\MarketAnalyticsApi\Characteristics\RequestSchema\ExcludeCollection $must_have;

}
