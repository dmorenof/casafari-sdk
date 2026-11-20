<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataItem;

final class CoordinatesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'lat',
    'lon',
];

    /**
     * Latitude.
     */
    public float $lat;
    /**
     * Longitude.
     */
    public float $lon;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lat' => is_float($value) ? $this->lat = $value : parent::assignMember($name, $value),
            'lon' => is_float($value) ? $this->lon = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
