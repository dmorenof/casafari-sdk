<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'ConsumerCreditSrcPolicyDate' => [
        'format' => 'date-time',
    ],
    'ConsumerCreditSrcPolicyInitDate' => [
        'format' => 'date-time',
    ],
    'CreateDate' => [
        'format' => 'date-time',
    ],
    'IndependentCreditMediatorId' => [
        'format' => 'int32',
    ],
    'MortgageCreditSrcPolicyDate' => [
        'format' => 'date-time',
    ],
    'MortgageCreditSrcPolicyInitDate' => [
        'format' => 'date-time',
    ],
    'ParentID' => [
        'format' => 'int32',
    ],
    'UserID' => [
        'format' => 'int32',
    ],
];

    public string $AMI;
    public string $AgencyAddress;
    public string $AgencyEmail;
    /**
     * Format: int32
     */
    public int $AgencyID;
    public string $AgencyMobilePhone;
    public string $AgencyName;
    public string $AgencyPhone;
    public string $AgencyTaxPayerNumber;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyDto\AgencyLocalesCollection $Agency_Locales;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyDto\AgencyPhotosCollection $Agency_Photos;
    public string $AuthorizedServices;
    public \CasafariSDK\Collections\StringCollection $AuthorizedServicesNames;
    public bool $CanVisibleOnWebsite;
    public string $CompanyName;
    public string $ConflictCenters;
    public bool $ConsultancyServices;
    public string $ConsumerCreditSrcInsuranseCompany;
    /**
     * Format: date-time
     */
    public string $ConsumerCreditSrcPolicyDate;
    /**
     * Format: date-time
     */
    public string $ConsumerCreditSrcPolicyInitDate;
    public string $ConsumerCreditSrcPolicyNumber;
    public string $Courtname;
    /**
     * Format: date-time
     */
    public string $CreateDate;
    public string $CreditCategory;
    public string $CreditMediatorLicense;
    public string $CreditMediatorName;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CreditMediator\CreditMediatorsDto $CreditMediatorObject;
    public string $CreditTypes;
    public \CasafariSDK\Collections\StringCollection $CreditTypesNames;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyDto\EntitiesCollection $Entities;
    public bool $ExclusivityRegime;
    public string $FacebookURL;
    public string $GMapLat;
    public string $GMapLot;
    /**
     * Format: int32
     */
    public int $IndependentCreditMediatorId;
    public string $InstagramURL;
    public string $InsuranceCompany;
    public string $InsuranceContractID;
    /**
     * Format: double
     */
    public float $InsuranceValue;
    public string $InvoiceXpressAPIKey;
    public string $InvoiceXpressAPIPath;
    public string $LinkedInURL;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location\LocationDto $Location;
    public string $LogoPath;
    public string $ManagingPartner;
    public string $MortgageCreditSrcInsuranseCompany;
    /**
     * Format: date-time
     */
    public string $MortgageCreditSrcPolicyDate;
    /**
     * Format: date-time
     */
    public string $MortgageCreditSrcPolicyInitDate;
    public string $MortgageCreditSrcPolicyNumber;
    public string $OfficeHours;
    /**
     * Format: int32
     */
    public int $ParentID;
    public string $PartnerBanks;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencyDto\BanksNamesCollection $PartnerBanksNames;
    public string $ReceptionRestriction;
    public string $RegVerification;
    /**
     * Format: double
     */
    public float $SocialCapital;
    public string $SupervisingEntity;
    public string $TaxPayerNumber;
    public string $TwitterURL;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\User\UserDto $User;
    /**
     * Format: int32
     */
    public int $UserID;
    public string $YoutubeURL;
    public string $ZipCode;

}
