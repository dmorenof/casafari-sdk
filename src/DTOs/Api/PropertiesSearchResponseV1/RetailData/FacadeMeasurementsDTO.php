<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchResponseV1\RetailData;

/**
 * Facade measurements of the commercial property (height, length, surface in meters).
 */
final class FacadeMeasurementsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'height',
    'length',
    'surface',
];

    /**
     * Facade height in meters.
     */
    public ?float $height;
    /**
     * Facade length in meters.
     */
    public ?float $length;
    /**
     * Facade surface area in square meters.
     */
    public ?float $surface;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'height' => $value === null || is_float($value) ? $this->height = $value : parent::assignMember($name, $value),
            'length' => $value === null || is_float($value) ? $this->length = $value : parent::assignMember($name, $value),
            'surface' => $value === null || is_float($value) ? $this->surface = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
