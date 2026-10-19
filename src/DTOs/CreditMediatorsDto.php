<?php

namespace CasafariSDK\DTOs;

/**
 * CreditMediatorsDto: typed representation of Casafari.Crm.Api.Dtos.CreditMediator.CreditMediatorsDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class CreditMediatorsDto extends \CasafariSDK\Core\DTO
{
    public int $CreditMediatorId;
    public int $UserId;
    public string $CreditMediatorName;
    public string $CreditCompanyName;
    public string $AMI;
    public string $TaxPayerNumber;
    public string $CreditMediatorLicense;
    public float $SocialCapital;
    public string $ManagingPartner;
    public string $InsuranceCompany;
    public float $InsuranceValue;
    public string $Courtname;
    public string $InsuranceContractID;
    public string $Email;
    public string $Phone;
    public string $MobilePhone;
    public string $OfficeHours;
    public int $CountryId;
    public int $DistrictId;
    public int $CityId;
    public int $LocalityId;
    public string $Address;
    public string $ZipCode;
    public string $GMapLat;
    public string $GMapLot;
    public \CasafariSDK\DTOs\LocationDto $Location;
}
