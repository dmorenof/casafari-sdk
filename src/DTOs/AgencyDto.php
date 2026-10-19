<?php

namespace CasafariSDK\DTOs;

/**
 * AgencyDto: typed representation of Casafari.Crm.Api.Dtos.Agency.AgencyDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class AgencyDto extends \CasafariSDK\Core\DTO
{
    public int $AgencyID;
    public string $AgencyName;
    public \CasafariSDK\DTOs\UserDto $User;
    public string $CompanyName;
    public string $AgencyMobilePhone;
    public string $AMI;
    public string $InvoiceXpressAPIKey;
    public string $InvoiceXpressAPIPath;
    public string $AgencyAddress;
    public string $AgencyPhone;
    public string $AgencyEmail;
    public int $UserID;
    public string $CreateDate;
    public string $LogoPath;
    public string $GMapLot;
    public string $GMapLat;
    public string $OfficeHours;
    public \CasafariSDK\DTOs\LocationDto $Location;
    public \CasafariSDK\TypedArrays\AgencyLocaleDtosArray $Agency_Locales;
    public \CasafariSDK\TypedArrays\AgencyPhotoDtosArray $Agency_Photos;
    public \CasafariSDK\TypedArrays\EntityDtosArray $Entities;
    public int $ParentID;
    public string $ZipCode;
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
    public string $CreditMediatorLicense;
    public \CasafariSDK\TypedArrays\PartnerBanksNamesArray $PartnerBanksNames;
    public \CasafariSDK\TypedArrays\StringsArray $CreditTypesNames;
    public \CasafariSDK\TypedArrays\StringsArray $AuthorizedServicesNames;
    public bool $CanVisibleOnWebsite;
    public string $MortgageCreditSrcInsuranseCompany;
    public string $MortgageCreditSrcPolicyInitDate;
    public string $ConsumerCreditSrcInsuranseCompany;
    public string $ConsumerCreditSrcPolicyInitDate;
    public int $IndependentCreditMediatorId;
    public \CasafariSDK\DTOs\CreditMediatorsDto $CreditMediatorObject;
    public string $AgencyTaxPayerNumber;
    public string $CreditMediatorName;
    public float $SocialCapital;
    public string $ManagingPartner;
    public string $InsuranceCompany;
    public float $InsuranceValue;
    public string $Courtname;
    public string $InsuranceContractID;
    public string $LinkedInURL;
    public string $FacebookURL;
    public string $TwitterURL;
    public string $InstagramURL;
    public string $YoutubeURL;
    public string $TaxPayerNumber;
}
