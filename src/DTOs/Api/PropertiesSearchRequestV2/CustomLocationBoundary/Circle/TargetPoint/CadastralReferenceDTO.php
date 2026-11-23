<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchRequestV2\CustomLocationBoundary\Circle\TargetPoint;

/**
 * Cadastral reference of the property to define the point to search around. <br/>For now available only for Spain.
 */
final class CadastralReferenceDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'cadastral_reference',
    'country_code',
];

    protected const array WRITE_ONLY_FIELDS = [
    'cadastral_reference',
    'country_code',
    'municipality',
    'province',
];

    /**
     * Cadastral reference of the estate.
     */
    public string $cadastral_reference;
    /**
     * Country code following the ISO 3166-1 alpha-2 rules.
     */
    public \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\CustomLocationBoundary\Circle\TargetPoint\CadastralReference\CountryCodeEnum $country_code;
    /**
     * Name of the estate's municipality.
     */
    public string $municipality;
    /**
     * Name of the estate's province.
     */
    public string $province;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cadastral_reference' => is_string($value) ? $this->cadastral_reference = $value : parent::assignMember($name, $value),
            'country_code' => is_string($value) ? $this->country_code = \CasafariSDK\Enums\Api\PropertiesSearchRequestV2\CustomLocationBoundary\Circle\TargetPoint\CadastralReference\CountryCodeEnum::from($value) : parent::assignMember($name, $value),
            'municipality' => is_string($value) ? $this->municipality = $value : parent::assignMember($name, $value),
            'province' => is_string($value) ? $this->province = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
