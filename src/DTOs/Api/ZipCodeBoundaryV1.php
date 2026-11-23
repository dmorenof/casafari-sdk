<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class ZipCodeBoundaryV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'boundary',
    'zip_code',
];

    /**
     * Zipcode boundary.
     */
    public \CasafariSDK\Collections\Api\ZipCodeBoundaryV1\BoundaryArray\BoundaryCollection $boundary;
    /**
     * Zipcode.
     */
    public string $zip_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'zip_code' => is_string($value) ? $this->zip_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
