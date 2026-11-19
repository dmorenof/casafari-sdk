<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyListRs extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'PrimaryLangId' => [
        'format' => 'int32',
    ],
    'TotalRecords' => [
        'format' => 'int32',
    ],
];

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyListRs\AgenciesCollection $Agencies;
    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     */
    public string $CorrelationId;
    /**
     * A reference for additional message identification, assigned by the requesting host system.
     */
    public string $EchoToken;
    /**
     * This tag inform client that the system cannot handle the request because some error
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyListRs\ErrorsCollection $Errors;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location\LocationsLookups $LocationsLookups;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\PagingRs $PagingRs;
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
     * Indicates that comunication request was ok. This tag when exists make tag Error to be null
     */
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Success $Success;
    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the message.
     * Format: yyyy-MM-ddThh:mm:ssZ - UTC
     * Example: 2019-08-09T08:12:10+00:00
     */
    public string $TimeStamp;
    /**
     * Format: int32
     */
    public int $TotalRecords {
        set {
            $this->assigning('TotalRecords', $value);
            $this->TotalRecords = $value;
        }
    }
    /**
     * The message version indicated by a decimal value.
     * Format: double
     */
    public float $Version;
    /**
     * This tag indicates that the request can be:
     * Request ok with warnings: Exitis tag Success and Warnings
     * Request not ok because bad request: Tag success null and tag warnigs with all warnings
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyListRs\WarningsCollection $Warnings;

}
