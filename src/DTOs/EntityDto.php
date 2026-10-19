<?php

namespace CasafariSDK\DTOs;

/**
 * EntityDto: typed representation of Casafari.Crm.Api.Dtos.Entity.EntityDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class EntityDto extends \CasafariSDK\Core\DTO
{
    public string $LinkedInUrl;
    public string $InstagramUrl;
    public string $TwitterUrl;
    public string $FacebookUrl;
    public bool $VisibleOnWebsite;
    public bool $VisibleOnLuxuryWebsite;
    public string $OptinDate;
    public bool $Optin;
    public string $UTCOffset;
    public string $Timezone;
    public int $AgencyID;
    public int $ParentAgencyID;
    public string $GC_RefreshToken;
    public string $LastAutoMailingDate;
    public int $WishPropertyDtoNumberRoomsTo;
    public int $WishPropertyDtoNumberRoomsFrom;
    public float $WishPropertyDtoHouseAreaTo;
    public float $WishPropertyDtoHouseAreaFrom;
    public float $WishPropertyDtoLandAreaTo;
    public float $WishPropertyDtoLandAreaFrom;
    public float $WishPropertyDtoPriceTo;
    public int $TelemarketerID;
    public int $JobType;
    public \CasafariSDK\DTOs\EntityDto $Entity2;
    public \CasafariSDK\DTOs\EntityDto $Entity1;
    public \CasafariSDK\TypedArrays\EntitiesLocaleDtosArray $Entities_Locale;
    public \CasafariSDK\TypedArrays\EntitiesLocaleDtosArray $Entities_Locales;
    public \CasafariSDK\DTOs\EntitiesLocaleDto $EntitiesLocale;
    public \CasafariSDK\TypedArrays\EntityFileDtosArray $EntityFiles;
    public \CasafariSDK\DTOs\EntityFileDto $EntityFile;
    public string $ExtraPhone2Desc;
    public string $ExtraPhone1Desc;
    public string $ExtraPhone2;
    public string $ExtraPhone1;
    public string $WishPropertyDtoConditions;
    public string $WishPropertyDtoTypes;
    public float $WishPropertyDtoPrice;
    public bool $ReceivesSMS;
    public string $ZipCode;
    public string $Webpage;
    public bool $IncludeInMailings;
    public bool $Active;
    public string $LastChangeDate;
    public string $CreateDate;
    public string $Address;
    public int $UserID;
    public string $Notes;
    public string $Faxnumber;
    public string $Cellphone;
    public string $PhoneNumber;
    public string $EmailAddress;
    public string $EntityName;
    public int $EntityType;
    public int $EntityID;
    public string $WishPropertyDtoTypologies;
    public string $WishPropertyDtoCities;
    public string $WishPropertyDtoDetailOptions;
    public string $WishPropertyDtoRegions;
    public string $ColorCode;
    public int $LawyerID;
    public int $CultureID;
    public string $Filename;
    public bool $AlreadyBought;
    public int $ColorLevel;
    public string $ActivityArea;
    public string $CompanyName;
    public string $JobTitle;
    public string $EntityTitle;
    public int $EntityAccessLevelID;
    public string $NIB;
    public string $BirthDate;
    public string $VisitNotes;
    public string $VisitDate;
    public int $CustomerOriginID;
    public string $WishPropertyDtoZones;
    public string $TaxPayerNumber;
    public string $ExternalCode;
    public int $BrokerID;
    public string $WishPropertyDtoLocalities;
    public bool $NewFromWebsite;
    public string $CountryISO;
    public string $EntityDefaultPhoto;
    public \CasafariSDK\DTOs\AgencyDtoShort $Agency;
    public string $SpokenLanguages;
}
