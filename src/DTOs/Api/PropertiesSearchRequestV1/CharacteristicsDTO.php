<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchRequestV1;

/**
 * Property characteristics.<br/><strong>The field was changed from Array of strings to object.</strong><br/><strong>Backwards compatibility is still supported.</strong>
 */
final class CharacteristicsDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Exclude properties that contain any of these characteristics.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV1\Characteristics\ExcludeCollection $exclude;
    /**
     * Include only properties that have all these characteristics.
     */
    public \CasafariSDK\Collections\Api\PropertiesSearchRequestV1\Characteristics\MustHaveCollection $must_have;

}
