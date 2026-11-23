<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class ZipCodeBoundaryFilterV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'country_code',
    'zip_code',
];

    /**
     * Country code following the ISO 3166-1 alpha-2 rules.
     */
    public \CasafariSDK\Enums\Api\ZipCodeBoundaryFilterV1\CountryCodeEnum $country_code;
    /**
     * Zipcode.
     */
    public string $zip_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country_code' => is_string($value) ? $this->country_code = \CasafariSDK\Enums\Api\ZipCodeBoundaryFilterV1\CountryCodeEnum::from($value) : parent::assignMember($name, $value),
            'zip_code' => is_string($value) ? $this->zip_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
