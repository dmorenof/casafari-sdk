<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class LocationRq extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'ActiveType' => [
        'format' => 'int32',
    ],
    'Level' => [
        'format' => 'int32',
    ],
    'ParentId' => [
        'format' => 'int32',
    ],
    'PrimaryLangId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $ActiveType {
        set {
            $this->assigning('ActiveType', $value);
            $this->ActiveType = $value;
        }
    }
    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     */
    public string $CorrelationId;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\LocationRq\CountryCodeEnum $CountryCode;
    /**
     * A reference for additional message identification, assigned by the requesting host system.
     */
    public string $EchoToken;
    /**
     * Format: int32
     */
    public int $Level {
        set {
            $this->assigning('Level', $value);
            $this->Level = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $ParentId {
        set {
            $this->assigning('ParentId', $value);
            $this->ParentId = $value;
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
            'ActiveType' => is_int($value) ? $this->ActiveType = $value : parent::assignMember($name, $value),
            'CorrelationId' => is_string($value) ? $this->CorrelationId = $value : parent::assignMember($name, $value),
            'CountryCode' => is_string($value) ? $this->CountryCode = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\LocationRq\CountryCodeEnum::from($value) : parent::assignMember($name, $value),
            'EchoToken' => is_string($value) ? $this->EchoToken = $value : parent::assignMember($name, $value),
            'Level' => is_int($value) ? $this->Level = $value : parent::assignMember($name, $value),
            'ParentId' => is_int($value) ? $this->ParentId = $value : parent::assignMember($name, $value),
            'PrimaryLangId' => is_int($value) ? $this->PrimaryLangId = $value : parent::assignMember($name, $value),
            'RetransmissionIndicator' => is_bool($value) ? $this->RetransmissionIndicator = $value : parent::assignMember($name, $value),
            'TimeStamp' => is_string($value) ? $this->TimeStamp = $value : parent::assignMember($name, $value),
            'Version' => is_float($value) ? $this->Version = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
