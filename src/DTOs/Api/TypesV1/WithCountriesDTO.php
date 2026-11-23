<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\TypesV1;

final class WithCountriesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countries',
    'name',
];

    /**
     * List of countries where the type is available.
     */
    public \CasafariSDK\Collections\StringCollection $countries;
    /**
     * Type name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'countries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->countries = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
