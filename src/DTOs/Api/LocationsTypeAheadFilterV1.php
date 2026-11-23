<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class LocationsTypeAheadFilterV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'country_codes',
    'name',
];

    protected const array VALIDATION = [
    'name' => [
        'minLength' => 2,
        'maxLength' => 100,
    ],
    'size' => [
        'minimum' => 1.0,
        'maximum' => 100.0,
    ],
];

    /**
     * Country codes to scope the search. Supported: ES, PT.
     */
    public \CasafariSDK\Collections\Api\LocationsTypeAheadFilterV1\CountryCodesCollection $country_codes;
    /**
     * Language to use for the location name in the response. One of: en, pt, es, de.
     */
    public \CasafariSDK\Enums\Api\LocationsTypeAheadFilterV1\LangEnum $lang;
    /**
     * The location name to search for.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * The maximum number of suggestions to return. Default 30, maximum 100.
     */
    public int $size {
        set {
            $this->assigning('size', $value);
            $this->size = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lang' => is_string($value) ? $this->lang = \CasafariSDK\Enums\Api\LocationsTypeAheadFilterV1\LangEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
