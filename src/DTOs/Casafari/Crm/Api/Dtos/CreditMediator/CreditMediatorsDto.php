<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CreditMediator;

final class CreditMediatorsDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'CityId' => [
        'format' => 'int32',
    ],
    'CountryId' => [
        'format' => 'int32',
    ],
    'CreditMediatorId' => [
        'format' => 'int32',
    ],
    'DistrictId' => [
        'format' => 'int32',
    ],
    'LocalityId' => [
        'format' => 'int32',
    ],
    'UserId' => [
        'format' => 'int32',
    ],
];

    public string $AMI;
    public string $Address;
    /**
     * Format: int32
     */
    public int $CityId;
    /**
     * Format: int32
     */
    public int $CountryId;
    public string $Courtname;
    public string $CreditCompanyName;
    /**
     * Format: int32
     */
    public int $CreditMediatorId;
    public string $CreditMediatorLicense;
    public string $CreditMediatorName;
    /**
     * Format: int32
     */
    public int $DistrictId;
    public string $Email;
    public string $GMapLat;
    public string $GMapLot;
    public string $InsuranceCompany;
    public string $InsuranceContractID;
    /**
     * Format: double
     */
    public float $InsuranceValue;
    /**
     * Format: int32
     */
    public int $LocalityId;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location\LocationDto $Location;
    public string $ManagingPartner;
    public string $MobilePhone;
    public string $OfficeHours;
    public string $Phone;
    /**
     * Format: double
     */
    public float $SocialCapital;
    public string $TaxPayerNumber;
    /**
     * Format: int32
     */
    public int $UserId;
    public string $ZipCode;

}
