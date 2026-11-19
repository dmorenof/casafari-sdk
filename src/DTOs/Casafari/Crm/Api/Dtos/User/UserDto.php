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

}
