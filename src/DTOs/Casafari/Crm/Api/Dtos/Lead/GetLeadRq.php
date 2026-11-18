<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class GetLeadRq extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'Category' => [
        'enum' => [
            'Listings',
            'Sales',
        ],
    ],
    'EndDate' => [
        'format' => 'date-time',
    ],
    'Language' => [
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
    public string $EndDate;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\GetLeadRq\LanguageEnum $Language;
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
     * Format: date-time
     */
    public string $StartDate;
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
