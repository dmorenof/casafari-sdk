<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Multi culture property description
 */
final class LocaleList extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Property description
     */
    public string $description;
    /**
     * Property buttons
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\LocaleList\LabelsCollection $labels;
    public string $language;
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
            'labels' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->labels = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\LocaleList\LabelsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyButtons::class)) : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            'seodescription' => is_string($value) ? $this->seodescription = $value : parent::assignMember($name, $value),
            'seokeywords' => is_string($value) ? $this->seokeywords = $value : parent::assignMember($name, $value),
            'short' => is_string($value) ? $this->short = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
