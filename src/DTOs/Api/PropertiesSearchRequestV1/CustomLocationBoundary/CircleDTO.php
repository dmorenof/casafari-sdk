<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchRequestV1\CustomLocationBoundary;

/**
 * Circle boundary to search within.
 */
final class CircleDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'target_point',
];

    protected const array VALIDATION = [
    'distance' => [
        'minimum' => 0.05,
        'maximum' => 50.0,
    ],
];

    /**
     * Maximum distance in kilometers from the requested `target_point` to the properties.
     */
    public float $distance {
        set {
            $this->assigning('distance', $value);
            $this->distance = $value;
        }
    }
    /**
     * Target point to search around. Can be defined as coordinates, address or cadastral reference of the property. Only one value should be provided.
     */
    public \CasafariSDK\DTOs\Api\PropertiesSearchRequestV1\CustomLocationBoundary\Circle\TargetPointDTO $target_point;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'distance' => is_float($value) ? $this->distance = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
