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
    public int $Lang;
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
