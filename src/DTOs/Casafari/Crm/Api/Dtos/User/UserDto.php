<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\User;

final class UserDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'ConsumerCreditSrcPolicyDate' => [
        'format' => 'date-time',
    ],
    'ConsumerCreditSrcPolicyInitDate' => [
        'format' => 'date-time',
    ],
    'CreateDate' => [
        'format' => 'date-time',
    ],
    'CreditMediatorId' => [
        'format' => 'int32',
    ],
    'IndependentCreditMediatorId' => [
        'format' => 'int32',
    ],
    'LastLogin' => [
        'format' => 'date-time',
    ],
    'MortgageCreditSrcPolicyDate' => [
        'format' => 'date-time',
    ],
    'MortgageCreditSrcPolicyInitDate' => [
        'format' => 'date-time',
    ],
    'ProppyUserId' => [
        'format' => 'int32',
    ],
    'UserID' => [
        'format' => 'int32',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'CompanyName',
    'PhoneList',
];

    public string $AMILicenceNumber;
    public bool $Active;
    public string $Address;
    public string $AuthorizedICNumber;
    public string $AuthorizedServices;
    public string $ColorCode;
    public string $CompanyName;
    public string $ConflictCenters;
    public bool $ConsultancyServices;
    public string $ConsumerCreditSrcIncuranseCompany;
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
    /**
     * Format: int32
     */
    public int $CreditMediatorId {
        set {
            $this->assigning('CreditMediatorId', $value);
            $this->CreditMediatorId = $value;
        }
    }
    public string $CreditMediatorLicense;
    public string $CreditTypes;
    public string $Emailaddress;
    public bool $EnableLocationTextExportToPortals;
    public bool $EnableLocationTextInWebsite;
    public bool $ExclusivityRegime;
    public string $FacebookURL;
    public string $Fax;
    /**
     * Format: double
     */
    public float $ForeignCurrencyRate;
    public string $Fullname;
    public string $GAnalyticsCode;
    public string $GMapsLatitude;
    public string $GMapsLongitude;
    public string $IgnoreIPS;
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
    public bool $IsProppy;
    /**
     * Format: date-time
     */
    public string $LastLogin {
        set {
            $this->assigning('LastLogin', $value);
            $this->LastLogin = $value;
        }
    }
    public string $LinkedInURL;
    public string $LogoURL;
    public string $MainDomainName;
    public string $MortgageCreditSrcIncuranseCompany;
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
    public string $PartnerBanks;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\User\UserDto\BanksNamesMap $PartnerBanksNames;
    public string $Phone1;
    public string $Phone2;
    public string $Phone3;
    public \CasafariSDK\Collections\StringCollection $PhoneList;
    public bool $PropertyAutoReference;
    public string $PropertyColors;
    public bool $PropertyPriceVisible;
    /**
     * Format: int32
     */
    public int $ProppyUserId {
        set {
            $this->assigning('ProppyUserId', $value);
            $this->ProppyUserId = $value;
        }
    }
    public string $ReceptionRestriction;
    public string $RegVerification;
    public string $SocialDesignation;
    public string $SupervisingEntity;
    public string $TaxPayerNumber;
    public string $TwitterURL;
    /**
     * Format: int32
     */
    public int $UserID {
        set {
            $this->assigning('UserID', $value);
            $this->UserID = $value;
        }
    }
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\User\UserDto\UserPortalsCollection $UserPortals;
    public bool $UsesPropertyButtons;
    public bool $UsesRealEstate;
    public bool $UsesRentals;
    public string $Webpage;
    public string $WebsiteLeadDestination;
    public string $YoutubeRefreshToken;
    public string $YoutubeURL;
    public string $ZipCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AMILicenceNumber' => is_string($value) ? $this->AMILicenceNumber = $value : parent::assignMember($name, $value),
            'Active' => is_bool($value) ? $this->Active = $value : parent::assignMember($name, $value),
            'Address' => is_string($value) ? $this->Address = $value : parent::assignMember($name, $value),
            'AuthorizedICNumber' => is_string($value) ? $this->AuthorizedICNumber = $value : parent::assignMember($name, $value),
            'AuthorizedServices' => is_string($value) ? $this->AuthorizedServices = $value : parent::assignMember($name, $value),
            'ColorCode' => is_string($value) ? $this->ColorCode = $value : parent::assignMember($name, $value),
            'CompanyName' => is_string($value) ? $this->CompanyName = $value : parent::assignMember($name, $value),
            'ConflictCenters' => is_string($value) ? $this->ConflictCenters = $value : parent::assignMember($name, $value),
            'ConsultancyServices' => is_bool($value) ? $this->ConsultancyServices = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcIncuranseCompany' => is_string($value) ? $this->ConsumerCreditSrcIncuranseCompany = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcPolicyDate' => is_string($value) ? $this->ConsumerCreditSrcPolicyDate = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcPolicyInitDate' => is_string($value) ? $this->ConsumerCreditSrcPolicyInitDate = $value : parent::assignMember($name, $value),
            'ConsumerCreditSrcPolicyNumber' => is_string($value) ? $this->ConsumerCreditSrcPolicyNumber = $value : parent::assignMember($name, $value),
            'CreateDate' => is_string($value) ? $this->CreateDate = $value : parent::assignMember($name, $value),
            'CreditCategory' => is_string($value) ? $this->CreditCategory = $value : parent::assignMember($name, $value),
            'CreditMediatorId' => is_int($value) ? $this->CreditMediatorId = $value : parent::assignMember($name, $value),
            'CreditMediatorLicense' => is_string($value) ? $this->CreditMediatorLicense = $value : parent::assignMember($name, $value),
            'CreditTypes' => is_string($value) ? $this->CreditTypes = $value : parent::assignMember($name, $value),
            'Emailaddress' => is_string($value) ? $this->Emailaddress = $value : parent::assignMember($name, $value),
            'EnableLocationTextExportToPortals' => is_bool($value) ? $this->EnableLocationTextExportToPortals = $value : parent::assignMember($name, $value),
            'EnableLocationTextInWebsite' => is_bool($value) ? $this->EnableLocationTextInWebsite = $value : parent::assignMember($name, $value),
            'ExclusivityRegime' => is_bool($value) ? $this->ExclusivityRegime = $value : parent::assignMember($name, $value),
            'FacebookURL' => is_string($value) ? $this->FacebookURL = $value : parent::assignMember($name, $value),
            'Fax' => is_string($value) ? $this->Fax = $value : parent::assignMember($name, $value),
            'ForeignCurrencyRate' => is_float($value) ? $this->ForeignCurrencyRate = $value : parent::assignMember($name, $value),
            'Fullname' => is_string($value) ? $this->Fullname = $value : parent::assignMember($name, $value),
            'GAnalyticsCode' => is_string($value) ? $this->GAnalyticsCode = $value : parent::assignMember($name, $value),
            'GMapsLatitude' => is_string($value) ? $this->GMapsLatitude = $value : parent::assignMember($name, $value),
            'GMapsLongitude' => is_string($value) ? $this->GMapsLongitude = $value : parent::assignMember($name, $value),
            'IgnoreIPS' => is_string($value) ? $this->IgnoreIPS = $value : parent::assignMember($name, $value),
            'IndependentCreditMediatorId' => is_int($value) ? $this->IndependentCreditMediatorId = $value : parent::assignMember($name, $value),
            'InstagramURL' => is_string($value) ? $this->InstagramURL = $value : parent::assignMember($name, $value),
            'IsProppy' => is_bool($value) ? $this->IsProppy = $value : parent::assignMember($name, $value),
            'LastLogin' => is_string($value) ? $this->LastLogin = $value : parent::assignMember($name, $value),
            'LinkedInURL' => is_string($value) ? $this->LinkedInURL = $value : parent::assignMember($name, $value),
            'LogoURL' => is_string($value) ? $this->LogoURL = $value : parent::assignMember($name, $value),
            'MainDomainName' => is_string($value) ? $this->MainDomainName = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcIncuranseCompany' => is_string($value) ? $this->MortgageCreditSrcIncuranseCompany = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcPolicyDate' => is_string($value) ? $this->MortgageCreditSrcPolicyDate = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcPolicyInitDate' => is_string($value) ? $this->MortgageCreditSrcPolicyInitDate = $value : parent::assignMember($name, $value),
            'MortgageCreditSrcPolicyNumber' => is_string($value) ? $this->MortgageCreditSrcPolicyNumber = $value : parent::assignMember($name, $value),
            'PartnerBanks' => is_string($value) ? $this->PartnerBanks = $value : parent::assignMember($name, $value),
            'Phone1' => is_string($value) ? $this->Phone1 = $value : parent::assignMember($name, $value),
            'Phone2' => is_string($value) ? $this->Phone2 = $value : parent::assignMember($name, $value),
            'Phone3' => is_string($value) ? $this->Phone3 = $value : parent::assignMember($name, $value),
            'PhoneList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->PhoneList = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'PropertyAutoReference' => is_bool($value) ? $this->PropertyAutoReference = $value : parent::assignMember($name, $value),
            'PropertyColors' => is_string($value) ? $this->PropertyColors = $value : parent::assignMember($name, $value),
            'PropertyPriceVisible' => is_bool($value) ? $this->PropertyPriceVisible = $value : parent::assignMember($name, $value),
            'ProppyUserId' => is_int($value) ? $this->ProppyUserId = $value : parent::assignMember($name, $value),
            'ReceptionRestriction' => is_string($value) ? $this->ReceptionRestriction = $value : parent::assignMember($name, $value),
            'RegVerification' => is_string($value) ? $this->RegVerification = $value : parent::assignMember($name, $value),
            'SocialDesignation' => is_string($value) ? $this->SocialDesignation = $value : parent::assignMember($name, $value),
            'SupervisingEntity' => is_string($value) ? $this->SupervisingEntity = $value : parent::assignMember($name, $value),
            'TaxPayerNumber' => is_string($value) ? $this->TaxPayerNumber = $value : parent::assignMember($name, $value),
            'TwitterURL' => is_string($value) ? $this->TwitterURL = $value : parent::assignMember($name, $value),
            'UserID' => is_int($value) ? $this->UserID = $value : parent::assignMember($name, $value),
            'UserPortals' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->UserPortals = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\User\UserDto\UserPortalsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\User\UserPortalDto::class)) : parent::assignMember($name, $value),
            'UsesPropertyButtons' => is_bool($value) ? $this->UsesPropertyButtons = $value : parent::assignMember($name, $value),
            'UsesRealEstate' => is_bool($value) ? $this->UsesRealEstate = $value : parent::assignMember($name, $value),
            'UsesRentals' => is_bool($value) ? $this->UsesRentals = $value : parent::assignMember($name, $value),
            'Webpage' => is_string($value) ? $this->Webpage = $value : parent::assignMember($name, $value),
            'WebsiteLeadDestination' => is_string($value) ? $this->WebsiteLeadDestination = $value : parent::assignMember($name, $value),
            'YoutubeRefreshToken' => is_string($value) ? $this->YoutubeRefreshToken = $value : parent::assignMember($name, $value),
            'YoutubeURL' => is_string($value) ? $this->YoutubeURL = $value : parent::assignMember($name, $value),
            'ZipCode' => is_string($value) ? $this->ZipCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
