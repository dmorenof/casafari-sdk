<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CodeTables;

/**
 * Represents a request model indicating which types to include in a code table query.
 */
final class CodeTableRq extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Lang' => [
        'format' => 'int32',
    ],
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
    /**
     * Gets or sets a value indicating whether to include business types in the query.
     */
    public bool $IncludeBusinessTypes;
    /**
     * Gets or sets a value indicating whether to include property types in the query.
     */
    public bool $IncludePropertyTypes;
    public bool $IncludeZones;
    /**
     * sets a value for the language of results.
     * Format: int32
     */
    public int $Lang {
        set {
            $this->assigning('Lang', $value);
            $this->Lang = $value;
        }
    }
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
            'IncludeBusinessTypes' => is_bool($value) ? $this->IncludeBusinessTypes = $value : parent::assignMember($name, $value),
            'IncludePropertyTypes' => is_bool($value) ? $this->IncludePropertyTypes = $value : parent::assignMember($name, $value),
            'IncludeZones' => is_bool($value) ? $this->IncludeZones = $value : parent::assignMember($name, $value),
            'Lang' => is_int($value) ? $this->Lang = $value : parent::assignMember($name, $value),
            'PrimaryLangId' => is_int($value) ? $this->PrimaryLangId = $value : parent::assignMember($name, $value),
            'RetransmissionIndicator' => is_bool($value) ? $this->RetransmissionIndicator = $value : parent::assignMember($name, $value),
            'TimeStamp' => is_string($value) ? $this->TimeStamp = $value : parent::assignMember($name, $value),
            'Version' => is_float($value) ? $this->Version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
