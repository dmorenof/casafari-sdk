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
    public int $ActiveType;
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
    public int $Level;
    /**
     * Format: int32
     */
    public int $ParentId;
    /**
     * The primary language preference for the message encoded as ISO 639-3.
     * Format: int32
     */
    public int $PrimaryLangId;
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

}
