<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class GetLeadRq extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'EndDate' => [
        'format' => 'date-time',
    ],
    'PrimaryLangId' => [
        'format' => 'int32',
    ],
    'StartDate' => [
        'format' => 'date-time',
    ],
];

    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\GetLeadRq\CategoryEnum $Category;
    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     */
    public string $CorrelationId;
    /**
     * A reference for additional message identification, assigned by the requesting host system.
     */
    public string $EchoToken;
    /**
     * Format: date-time
     */
    public string $EndDate {
        set {
            $this->assigning('EndDate', $value);
            $this->EndDate = $value;
        }
    }
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\GetLeadRq\LanguageEnum $Language;
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
     * Format: date-time
     */
    public string $StartDate {
        set {
            $this->assigning('StartDate', $value);
            $this->StartDate = $value;
        }
    }
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
            'Category' => is_string($value) ? $this->Category = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\GetLeadRq\CategoryEnum::from($value) : parent::assignMember($name, $value),
            'CorrelationId' => is_string($value) ? $this->CorrelationId = $value : parent::assignMember($name, $value),
            'EchoToken' => is_string($value) ? $this->EchoToken = $value : parent::assignMember($name, $value),
            'EndDate' => is_string($value) ? $this->EndDate = $value : parent::assignMember($name, $value),
            'Language' => is_string($value) ? $this->Language = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\GetLeadRq\LanguageEnum::from($value) : parent::assignMember($name, $value),
            'PrimaryLangId' => is_int($value) ? $this->PrimaryLangId = $value : parent::assignMember($name, $value),
            'RetransmissionIndicator' => is_bool($value) ? $this->RetransmissionIndicator = $value : parent::assignMember($name, $value),
            'StartDate' => is_string($value) ? $this->StartDate = $value : parent::assignMember($name, $value),
            'TimeStamp' => is_string($value) ? $this->TimeStamp = $value : parent::assignMember($name, $value),
            'Version' => is_float($value) ? $this->Version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
