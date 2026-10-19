<?php

namespace CasafariSDK\DTOs;

/**
 * UserDto: typed representation of Casafari.Crm.Api.Dtos.User.UserDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class UserDto extends \CasafariSDK\Core\DTO
{
    public int $ProppyUserId;
    public int $UserID;
    public bool $Active;
    public string $Fullname;
    public string $CompanyName;
    public string $Emailaddress;
    public string $Phone1;
    public \CasafariSDK\TypedArrays\StringsArray $PhoneList;
    public string $Phone2;
    public string $Phone3;
    public string $Fax;
    public string $Address;
    public string $Webpage;
    public string $CreateDate;
    public string $LastLogin;
    public string $AuthorizedICNumber;
    public string $WebsiteLeadDestination;
    public string $SocialDesignation;
    public string $TaxPayerNumber;
    public string $PropertyColors;
    public string $GAnalyticsCode;
    public string $MainDomainName;
    public string $ColorCode;
    public string $IgnoreIPS;
    public string $YoutubeRefreshToken;
    public bool $UsesRentals;
    public float $ForeignCurrencyRate;
    public bool $PropertyAutoReference;
    public bool $PropertyPriceVisible;
    public string $YoutubeURL;
    public string $LogoURL;
    public string $FacebookURL;
    public string $LinkedInURL;
    public string $InstagramURL;
    public string $TwitterURL;
    public string $AMILicenceNumber;
    public string $CreditMediatorLicense;
    public bool $IsProppy;
    public string $GMapsLatitude;
    public string $GMapsLongitude;
    public bool $UsesRealEstate;
    public bool $UsesPropertyButtons;
    public string $ZipCode;
    public \CasafariSDK\TypedArrays\UserPortalDtosArray $UserPortals;
    public bool $EnableLocationTextInWebsite;
    public bool $EnableLocationTextExportToPortals;
    public string $CreditCategory;
    public string $CreditTypes;
    public bool $ExclusivityRegime;
    public string $PartnerBanks;
    public string $AuthorizedServices;
    public bool $ConsultancyServices;
    public string $ReceptionRestriction;
    public string $SupervisingEntity;
    public string $ConflictCenters;
    public string $MortgageCreditSrcPolicyNumber;
    public string $MortgageCreditSrcPolicyDate;
    public string $ConsumerCreditSrcPolicyNumber;
    public string $ConsumerCreditSrcPolicyDate;
    public string $RegVerification;
    public object $PartnerBanksNames;
    public string $MortgageCreditSrcIncuranseCompany;
    public string $MortgageCreditSrcPolicyInitDate;
    public string $ConsumerCreditSrcIncuranseCompany;
    public string $ConsumerCreditSrcPolicyInitDate;
    public int $IndependentCreditMediatorId;
    public int $CreditMediatorId;
}
