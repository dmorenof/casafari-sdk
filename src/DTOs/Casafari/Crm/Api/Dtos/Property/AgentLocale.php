<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class AgentLocale extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Property description
     */
    public string $description;
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

}
