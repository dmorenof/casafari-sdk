<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\AlertDocumentsV1;

/**
 * Property coordinates.
 */
final class CoordinatesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'latitude',
    'longitude',
];

    /**
     * Latitude.
     */
    public float $latitude;
    /**
     * Longitude.
     */
    public float $longitude;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
