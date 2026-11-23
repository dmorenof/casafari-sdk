<?php

declare(strict_types=1);

namespace CasafariSDK\GetParams\Api\V1\References\Locations;

final class ByCoordinates extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'latitude',
    'longitude',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'lang' => 'lang',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
    ],
    'header' => [],
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

    public ?string $lang;
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
}
