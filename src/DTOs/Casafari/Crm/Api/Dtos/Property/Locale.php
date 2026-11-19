<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Multi culture property description
 */
final class Locale extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Property description
     */
    public string $description;
    /**
     * Property title/description language
     */
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Locale\LanguageEnum $language;
    /**
     * Property SEO/Description
     */
    public string $seodescription;
    /**
     * Property SEO/Keywords
     */
    public string $seokeywords;
    /**
     * Property short description
     */
    public string $short;
    /**
     * Property title
     */
    public string $title;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Locale\LanguageEnum::from($value) : parent::assignMember($name, $value),
            'seodescription' => is_string($value) ? $this->seodescription = $value : parent::assignMember($name, $value),
            'seokeywords' => is_string($value) ? $this->seokeywords = $value : parent::assignMember($name, $value),
            'short' => is_string($value) ? $this->short = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
