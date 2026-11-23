<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1;

final class SettingsDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'language',
];

    protected const array VALIDATION = [
    'brand_color' => [
        'maxLength' => 9,
    ],
];

    /**
     * Main color of graphical elements in the report.
     */
    public string $brand_color {
        set {
            $this->assigning('brand_color', $value);
            $this->brand_color = $value;
        }
    }
    /**
     * List of components to include in the smart link.
     */
    public \CasafariSDK\Collections\Api\CreateSmartLinkRequestV1\Settings\ToIncludeCollection $components_to_include;
    /**
     * Removes the "Sourced by Casafari" label from the Smartlink page.
     */
    public bool $is_hide_source;
    /**
     * Determines whether a share page should be indexed by search engines.
     */
    public bool $is_indexing_by_search_engine;
    /**
     * Language of the share page.
     */
    public \CasafariSDK\Enums\Api\CreateSmartLinkRequestV1\Settings\LanguageEnum $language;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand_color' => is_string($value) ? $this->brand_color = $value : parent::assignMember($name, $value),
            'is_hide_source' => is_bool($value) ? $this->is_hide_source = $value : parent::assignMember($name, $value),
            'is_indexing_by_search_engine' => is_bool($value) ? $this->is_indexing_by_search_engine = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \CasafariSDK\Enums\Api\CreateSmartLinkRequestV1\Settings\LanguageEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
