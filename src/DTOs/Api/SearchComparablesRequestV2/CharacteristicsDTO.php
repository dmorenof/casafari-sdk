<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchComparablesRequestV2;

/**
 * Property characteristics.
 */
final class CharacteristicsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Exclude properties that contain any of these characteristics.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV2\Characteristics\ExcludeCollection $exclude;
    /**
     * Include only properties that have all these characteristics.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV2\Characteristics\MustHaveCollection $must_have;
    /**
     * Include properties that have any of these characteristics.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesRequestV2\Characteristics\ToHaveCollection $nice_to_have;

}
