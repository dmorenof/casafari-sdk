<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyDto extends \Dmorenof\SdkRuntime\DTO
{
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
    public int $AgencyID {
        set {
            $this->assigning('AgencyID', $value);
            $this->AgencyID = $value;
        }
    }
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
    public string $ConsumerCreditSrcPolicyDate {
        set {
            $this->assigning('ConsumerCreditSrcPolicyDate', $value);
            $this->ConsumerCreditSrcPolicyDate = $value;
        }
    }
    /**
     * Format: date-time
     */
    public string $ConsumerCreditSrcPolicyInitDate {
        set {
            $this->assigning('ConsumerCreditSrcPolicyInitDate', $value);
            $this->ConsumerCreditSrcPolicyInitDate = $value;
        }
    }
    public string $ConsumerCreditSrcPolicyNumber;
    public string $Courtname;
    /**
     * Format: date-time
     */
    public string $CreateDate {
        set {
            $this->assigning('CreateDate', $value);
            $this->CreateDate = $value;
        }
    }
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
    public int $IndependentCreditMediatorId {
        set {
            $this->assigning('IndependentCreditMediatorId', $value);
            $this->IndependentCreditMediatorId = $value;
        }
    }
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
    public string $MortgageCreditSrcPolicyDate {
        set {
            $this->assigning('MortgageCreditSrcPolicyDate', $value);
            $this->MortgageCreditSrcPolicyDate = $value;
        }
    }
    /**
     * Format: date-time
     */
    public string $MortgageCreditSrcPolicyInitDate {
        set {
            $this->assigning('MortgageCreditSrcPolicyInitDate', $value);
            $this->MortgageCreditSrcPolicyInitDate = $value;
        }
    }
    public string $MortgageCreditSrcPolicyNumber;
    public string $OfficeHours;
    /**
     * Format: int32
     */
    public int $ParentID {
        set {
            $this->assigning('ParentID', $value);
            $this->ParentID = $value;
        }
    }
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
    public int $UserID {
        set {
            $this->assigning('UserID', $value);
            $this->UserID = $value;
        }
    }
    public string $YoutubeURL;
    public string $ZipCode;

}
