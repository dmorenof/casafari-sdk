<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class GetLocationsV1 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'coordinates' => [
        'minItems' => 4,
    ],
    'zip_codes' => [
        'maxItems' => 15,
    ],
];

    /**
     * Limit search to locations within a closed polygon. First and last points must match.
     */
    public \CasafariSDK\Collections\Api\GetLocationsV1\CoordinatesCollection $coordinates {
        set {
            $this->assigning('coordinates', $value);
            $this->coordinates = $value;
        }
    }
    /**
     * Language to use for the location names in the response. (When the provided language is not supported, the results will be returned in English.)
     */
    public string $lang;
    /**
     * Location name to search.
     */
    public string $name;
    /**
     * List of zip codes to filter by.
     */
    public \CasafariSDK\Collections\StringCollection $zip_codes {
        set {
            $this->assigning('zip_codes', $value);
            $this->zip_codes = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'lang' => is_string($value) ? $this->lang = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'zip_codes' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->zip_codes = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
