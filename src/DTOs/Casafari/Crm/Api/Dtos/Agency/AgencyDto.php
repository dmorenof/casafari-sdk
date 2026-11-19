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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AMI' => is_string($value) ? $this->AMI = $value : parent::assignMember($name, $value),
            'AgencyAddress' => is_string($value) ? $this->AgencyAddress = $value : parent::assignMember($name, $value),
            'AgencyEmail' => is_string($value) ? $this->AgencyEmail = $value : parent::assignMember($name, $value),
            'AgencyID' => is_int($value) ? $this->AgencyID = $value : parent::assignMember($name, $value),
            'AgencyMobilePhone' => is_string($value) ? $this->AgencyMobilePhone = $value : parent::assignMember($name, $value),
            'AgencyName' => is_string($value) ? $this->AgencyName = $value : parent::assignMember($name, $value),
            'AgencyPhone' => is_string($value) ? $this->AgencyPhone = $value : parent::assignMember($name, $value),
            'AgencyTaxPayerNumber' => is_string($value) ? $this->AgencyTaxPayerNumber = $value : parent::assignMember($name, $value),
            'AuthorizedServices' => is_string($value) ? $this->AuthorizedServices = $value : parent::assignMember($name, $value),
            'AuthorizedServicesNames' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->AuthorizedServicesNames = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'CanVisibleOnWebsite' => is_bool($value) ? $this->CanVisibleOnWebsite = $value : parent::assignMember($name, $value),
            'CompanyName' => is_string($value) ? $this->CompanyName = $value : parent::assignMember($name, $value),
            'ConflictCenters' => is_string($value) ? $this->ConflictCenters = $value : parent::assignMember($name, $value),
            'ConsultancyServices' => is_bool($value) ? $this->ConsultancyServices = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcInsuranseCompany' => is_string($value) ? $this->ConsumerCreditSrcInsuranseCompany = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcPolicyDate' => is_string($value) ? $this->ConsumerCreditSrcPolicyDate = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcPolicyInitDate' => is_string($value) ? $this->ConsumerCreditSrcPolicyInitDate = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcPolicyNumber' => is_string($value) ? $this->ConsumerCreditSrcPolicyNumber = $value : parent::assignMember($name, $value),
            'Courtname' => is_string($value) ? $this->Courtname = $value : parent::assignMember($name, $value),
            'CreateDate' => is_string($value) ? $this->CreateDate = $value : parent::assignMember($name, $value),
            'CreditCategory' => is_string($value) ? $this->CreditCategory = $value : parent::assignMember($name, $value),
            'CreditMediatorLicense' => is_string($value) ? $this->CreditMediatorLicense = $value : parent::assignMember($name, $value),
            'CreditMediatorName' => is_string($value) ? $this->CreditMediatorName = $value : parent::assignMember($name, $value),
            'CreditMediatorObject' => $value instanceof \stdClass ? $this->CreditMediatorObject = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CreditMediator\CreditMediatorsDto($value) : parent::assignMember($name, $value),
            'CreditTypes' => is_string($value) ? $this->CreditTypes = $value : parent::assignMember($name, $value),
            'CreditTypesNames' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->CreditTypesNames = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'ExclusivityRegime' => is_bool($value) ? $this->ExclusivityRegime = $value : parent::assignMember($name, $value),
            'FacebookURL' => is_string($value) ? $this->FacebookURL = $value : parent::assignMember($name, $value),
            'GMapLat' => is_string($value) ? $this->GMapLat = $value : parent::assignMember($name, $value),
            'GMapLot' => is_string($value) ? $this->GMapLot = $value : parent::assignMember($name, $value),
            'IndependentCreditMediatorId' => is_int($value) ? $this->IndependentCreditMediatorId = $value : parent::assignMember($name, $value),
            'InstagramURL' => is_string($value) ? $this->InstagramURL = $value : parent::assignMember($name, $value),
            'InsuranceCompany' => is_string($value) ? $this->InsuranceCompany = $value : parent::assignMember($name, $value),
            'InsuranceContractID' => is_string($value) ? $this->InsuranceContractID = $value : parent::assignMember($name, $value),
            'InsuranceValue' => is_float($value) ? $this->InsuranceValue = $value : parent::assignMember($name, $value),
            'InvoiceXpressAPIKey' => is_string($value) ? $this->InvoiceXpressAPIKey = $value : parent::assignMember($name, $value),
            'InvoiceXpressAPIPath' => is_string($value) ? $this->InvoiceXpressAPIPath = $value : parent::assignMember($name, $value),
            'LinkedInURL' => is_string($value) ? $this->LinkedInURL = $value : parent::assignMember($name, $value),
            'Location' => $value instanceof \stdClass ? $this->Location = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location\LocationDto($value) : parent::assignMember($name, $value),
            'LogoPath' => is_string($value) ? $this->LogoPath = $value : parent::assignMember($name, $value),
            'ManagingPartner' => is_string($value) ? $this->ManagingPartner = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcInsuranseCompany' => is_string($value) ? $this->MortgageCreditSrcInsuranseCompany = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcPolicyDate' => is_string($value) ? $this->MortgageCreditSrcPolicyDate = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcPolicyInitDate' => is_string($value) ? $this->MortgageCreditSrcPolicyInitDate = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcPolicyNumber' => is_string($value) ? $this->MortgageCreditSrcPolicyNumber = $value : parent::assignMember($name, $value),
            'OfficeHours' => is_string($value) ? $this->OfficeHours = $value : parent::assignMember($name, $value),
            'ParentID' => is_int($value) ? $this->ParentID = $value : parent::assignMember($name, $value),
            'PartnerBanks' => is_string($value) ? $this->PartnerBanks = $value : parent::assignMember($name, $value),
            'ReceptionRestriction' => is_string($value) ? $this->ReceptionRestriction = $value : parent::assignMember($name, $value),
            'RegVerification' => is_string($value) ? $this->RegVerification = $value : parent::assignMember($name, $value),
            'SocialCapital' => is_float($value) ? $this->SocialCapital = $value : parent::assignMember($name, $value),
            'SupervisingEntity' => is_string($value) ? $this->SupervisingEntity = $value : parent::assignMember($name, $value),
            'TaxPayerNumber' => is_string($value) ? $this->TaxPayerNumber = $value : parent::assignMember($name, $value),
            'TwitterURL' => is_string($value) ? $this->TwitterURL = $value : parent::assignMember($name, $value),
            'User' => $value instanceof \stdClass ? $this->User = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\User\UserDto($value) : parent::assignMember($name, $value),
            'UserID' => is_int($value) ? $this->UserID = $value : parent::assignMember($name, $value),
            'YoutubeURL' => is_string($value) ? $this->YoutubeURL = $value : parent::assignMember($name, $value),
            'ZipCode' => is_string($value) ? $this->ZipCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
