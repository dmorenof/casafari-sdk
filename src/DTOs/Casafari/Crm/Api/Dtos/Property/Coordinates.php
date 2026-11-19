<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class Coordinates extends \Dmorenof\SdkRuntime\DTO
{
    public string $latitude;
    public string $longitude;
    public bool $visible;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'latitude' => is_string($value) ? $this->latitude = $value : parent::assignMember($name, $value),
            'longitude' => is_string($value) ? $this->longitude = $value : parent::assignMember($name, $value),
            'visible' => is_bool($value) ? $this->visible = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
