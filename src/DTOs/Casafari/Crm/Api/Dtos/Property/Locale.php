<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Multi culture property description
 */
final class Locale extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'language' => [
        'enum' => [
            'da',
            'de',
            'en',
            'es',
            'fi',
            'fr',
            'it',
            'nl',
            'no',
            'pl',
            'pt',
            'ru',
            'sv',
            'zh',
        ],
    ],
];

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

}
