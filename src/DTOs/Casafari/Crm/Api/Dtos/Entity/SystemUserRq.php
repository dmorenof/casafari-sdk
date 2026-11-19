<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class SystemUserRq extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'PrimaryLangId' => [
        'format' => 'int32',
    ],
];

    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     */
    public string $CorrelationId;
    /**
     * A reference for additional message identification, assigned by the requesting host system.
     */
    public string $EchoToken;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityListSorts $EntityListSorts;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\SystemUserEntitySearchFilters $EntitySearchFilters;
    /**
     * Filters used for entities
     * Attention: Filter by location only works if IncludeAgencies is true
     */
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntitySearchIncludes $Includes;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Entity\SystemUserRq\LangEnum $Lang;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\PagingRq $PagingRq;
    /**
     * The primary language preference for the message encoded as ISO 639-3.
     * Format: int32
     */
    public int $PrimaryLangId {
        set {
            $this->assigning('PrimaryLangId', $value);
            $this->PrimaryLangId = $value;
        }
    }
    /**
     * When true, indicates the message is being re-sent after a failure.
     */
    public bool $RetransmissionIndicator;
    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the message.
     * Format: yyyy-MM-ddThh:mm:ssZ - UTC
     * Example: 2019-08-09T08:12:10+00:00
     */
    public string $TimeStamp;
    /**
     * The message version indicated by a decimal value.
     * Format: double
     */
    public float $Version;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CorrelationId' => is_string($value) ? $this->CorrelationId = $value : parent::assignMember($name, $value),
            'EchoToken' => is_string($value) ? $this->EchoToken = $value : parent::assignMember($name, $value),
            'EntityListSorts' => $value instanceof \stdClass ? $this->EntityListSorts = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityListSorts($value) : parent::assignMember($name, $value),
            'EntitySearchFilters' => $value instanceof \stdClass ? $this->EntitySearchFilters = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\SystemUserEntitySearchFilters($value) : parent::assignMember($name, $value),
            'Includes' => $value instanceof \stdClass ? $this->Includes = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntitySearchIncludes($value) : parent::assignMember($name, $value),
            'Lang' => is_string($value) ? $this->Lang = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Entity\SystemUserRq\LangEnum::from($value) : parent::assignMember($name, $value),
            'PagingRq' => $value instanceof \stdClass ? $this->PagingRq = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\PagingRq($value) : parent::assignMember($name, $value),
            'PrimaryLangId' => is_int($value) ? $this->PrimaryLangId = $value : parent::assignMember($name, $value),
            'RetransmissionIndicator' => is_bool($value) ? $this->RetransmissionIndicator = $value : parent::assignMember($name, $value),
            'TimeStamp' => is_string($value) ? $this->TimeStamp = $value : parent::assignMember($name, $value),
            'Version' => is_float($value) ? $this->Version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
