<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchResponseV1\ListingsItem;

final class CompaniesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'casafari_connect_on',
    'name',
];

    /**
     * Whether the company is connected to Casafari Connect.
     */
    public bool $casafari_connect_on;
    /**
     * Company name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'casafari_connect_on' => is_bool($value) ? $this->casafari_connect_on = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
