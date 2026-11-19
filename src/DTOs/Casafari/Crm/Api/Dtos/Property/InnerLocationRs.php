<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class InnerLocationRs extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'PrimaryLangId' => [
        'format' => 'int32',
    ],
];

    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection $Cities;
    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     */
    public string $CorrelationId;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection $Countries;
    /**
     * A reference for additional message identification, assigned by the requesting host system.
     */
    public string $EchoToken;
    /**
     * This tag inform client that the system cannot handle the request because some error
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyListRs\ErrorsCollection $Errors;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection $Localities;
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
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection $Regions;
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Cities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Cities = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocationsElement::class)) : parent::assignMember($name, $value),
            'CorrelationId' => is_string($value) ? $this->CorrelationId = $value : parent::assignMember($name, $value),
            'Countries' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Countries = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocationsElement::class)) : parent::assignMember($name, $value),
            'EchoToken' => is_string($value) ? $this->EchoToken = $value : parent::assignMember($name, $value),
            'Errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Errors = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyListRs\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Error::class)) : parent::assignMember($name, $value),
            'Localities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Localities = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocationsElement::class)) : parent::assignMember($name, $value),
            'PrimaryLangId' => is_int($value) ? $this->PrimaryLangId = $value : parent::assignMember($name, $value),
            'Regions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Regions = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\InnerLocationRs\CitiesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnerLocationsElement::class)) : parent::assignMember($name, $value),
            'RetransmissionIndicator' => is_bool($value) ? $this->RetransmissionIndicator = $value : parent::assignMember($name, $value),
            'TimeStamp' => is_string($value) ? $this->TimeStamp = $value : parent::assignMember($name, $value),
            'Version' => is_float($value) ? $this->Version = $value : parent::assignMember($name, $value),
            'Warnings' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Warnings = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyListRs\WarningsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Warning::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
