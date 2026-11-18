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
