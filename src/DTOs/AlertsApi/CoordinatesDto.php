<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\AlertsApi;

/**
 * CoordinatesDto
 */
final class CoordinatesDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'latitude',
    'longitude',
];

    protected const array VALIDATION = [
    'latitude' => [
        'minimum' => -90.0,
        'maximum' => 90.0,
    ],
    'longitude' => [
        'minimum' => -180.0,
        'maximum' => 180.0,
    ],
];

    public float $latitude {
        set {
            $this->assigning('latitude', $value);
            $this->latitude = $value;
        }
    }
    public float $longitude {
        set {
            $this->assigning('longitude', $value);
            $this->longitude = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latitude' => is_float($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_float($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
