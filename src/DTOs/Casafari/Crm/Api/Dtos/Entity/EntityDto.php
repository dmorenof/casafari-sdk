<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class EntityDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'BirthDate' => [
        'format' => 'date-time',
    ],
    'BrokerID' => [
        'format' => 'int32',
    ],
    'ColorLevel' => [
        'format' => 'int32',
    ],
    'CreateDate' => [
        'format' => 'date-time',
    ],
    'CultureID' => [
        'format' => 'int32',
    ],
    'CustomerOriginID' => [
        'format' => 'int32',
    ],
    'EntityAccessLevelID' => [
        'format' => 'int32',
    ],
    'EntityID' => [
        'format' => 'int32',
    ],
    'EntityType' => [
        'format' => 'int32',
    ],
    'JobType' => [
        'format' => 'int32',
    ],
    'LastAutoMailingDate' => [
        'format' => 'date-time',
    ],
    'LastChangeDate' => [
        'format' => 'date-time',
    ],
    'LawyerID' => [
        'format' => 'int32',
    ],
    'OptinDate' => [
        'format' => 'date-time',
    ],
    'ParentAgencyID' => [
        'format' => 'int32',
    ],
    'TelemarketerID' => [
        'format' => 'int32',
    ],
    'UserID' => [
        'format' => 'int32',
    ],
    'VisitDate' => [
        'format' => 'date-time',
    ],
    'WishPropertyDtoNumberRoomsFrom' => [
        'format' => 'int32',
    ],
    'WishPropertyDtoNumberRoomsTo' => [
        'format' => 'int32',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'EntitiesLocale',
    'EntityFile',
];

    public bool $Active;
    public string $ActivityArea;
    public string $Address;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyDtoShort $Agency;
    /**
     * Format: int32
     */
    public int $AgencyID {
        set {
            $this->assigning('AgencyID', $value);
            $this->AgencyID = $value;
        }
    }
    public bool $AlreadyBought;
    /**
     * Format: date-time
     */
    public string $BirthDate {
        set {
            $this->assigning('BirthDate', $value);
            $this->BirthDate = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $BrokerID {
        set {
            $this->assigning('BrokerID', $value);
            $this->BrokerID = $value;
        }
    }
    public string $Cellphone;
    public string $ColorCode;
    /**
     * Format: int32
     */
    public int $ColorLevel {
        set {
            $this->assigning('ColorLevel', $value);
            $this->ColorLevel = $value;
        }
    }
    public string $CompanyName;
    public string $CountryISO;
    /**
     * Format: date-time
     */
    public string $CreateDate {
        set {
            $this->assigning('CreateDate', $value);
            $this->CreateDate = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $CultureID {
        set {
            $this->assigning('CultureID', $value);
            $this->CultureID = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $CustomerOriginID {
        set {
            $this->assigning('CustomerOriginID', $value);
            $this->CustomerOriginID = $value;
        }
    }
    public string $EmailAddress;
    /**
     * This object is the representative object of first element in locales list
     */
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntitiesLocaleDto $EntitiesLocale;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Entity\EntityDto\EntitiesLocaleCollection $Entities_Locale;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Entity\EntityDto\EntitiesLocaleCollection $Entities_Locales;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityDto $Entity1;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityDto $Entity2;
    /**
     * Format: int32
     */
    public int $EntityAccessLevelID {
        set {
            $this->assigning('EntityAccessLevelID', $value);
            $this->EntityAccessLevelID = $value;
        }
    }
    public string $EntityDefaultPhoto;
    /**
     * This object is the representative object of first element in locales list
     */
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityFileDto $EntityFile;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Entity\EntityDto\EntityFilesCollection $EntityFiles;
    /**
     * Format: int32
     */
    public int $EntityID {
        set {
            $this->assigning('EntityID', $value);
            $this->EntityID = $value;
        }
    }
    public string $EntityName;
    public string $EntityTitle;
    /**
     * Format: int32
     */
    public int $EntityType {
        set {
            $this->assigning('EntityType', $value);
            $this->EntityType = $value;
        }
    }
    public string $ExternalCode;
    public string $ExtraPhone1;
    public string $ExtraPhone1Desc;
    public string $ExtraPhone2;
    public string $ExtraPhone2Desc;
    public string $FacebookUrl;
    public string $Faxnumber;
    public string $Filename;
    public string $GC_RefreshToken;
    public bool $IncludeInMailings;
    public string $InstagramUrl;
    public string $JobTitle;
    /**
     * Format: int32
     */
    public int $JobType {
        set {
            $this->assigning('JobType', $value);
            $this->JobType = $value;
        }
    }
    /**
     * Format: date-time
     */
    public string $LastAutoMailingDate {
        set {
            $this->assigning('LastAutoMailingDate', $value);
            $this->LastAutoMailingDate = $value;
        }
    }
    /**
     * Format: date-time
     */
    public string $LastChangeDate {
        set {
            $this->assigning('LastChangeDate', $value);
            $this->LastChangeDate = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $LawyerID {
        set {
            $this->assigning('LawyerID', $value);
            $this->LawyerID = $value;
        }
    }
    public string $LinkedInUrl;
    public string $NIB;
    public bool $NewFromWebsite;
    public string $Notes;
    public bool $Optin;
    /**
     * Format: date-time
     */
    public string $OptinDate {
        set {
            $this->assigning('OptinDate', $value);
            $this->OptinDate = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $ParentAgencyID {
        set {
            $this->assigning('ParentAgencyID', $value);
            $this->ParentAgencyID = $value;
        }
    }
    public string $PhoneNumber;
    public bool $ReceivesSMS;
    public string $SpokenLanguages;
    public string $TaxPayerNumber;
    /**
     * Format: int32
     */
    public int $TelemarketerID {
        set {
            $this->assigning('TelemarketerID', $value);
            $this->TelemarketerID = $value;
        }
    }
    public string $Timezone;
    public string $TwitterUrl;
    public string $UTCOffset;
    /**
     * Format: int32
     */
    public int $UserID {
        set {
            $this->assigning('UserID', $value);
            $this->UserID = $value;
        }
    }
    public bool $VisibleOnLuxuryWebsite;
    public bool $VisibleOnWebsite;
    /**
     * Format: date-time
     */
    public string $VisitDate {
        set {
            $this->assigning('VisitDate', $value);
            $this->VisitDate = $value;
        }
    }
    public string $VisitNotes;
    public string $Webpage;
    public string $WishPropertyDtoCities;
    public string $WishPropertyDtoConditions;
    public string $WishPropertyDtoDetailOptions;
    /**
     * Format: double
     */
    public float $WishPropertyDtoHouseAreaFrom;
    /**
     * Format: double
     */
    public float $WishPropertyDtoHouseAreaTo;
    /**
     * Format: double
     */
    public float $WishPropertyDtoLandAreaFrom;
    /**
     * Format: double
     */
    public float $WishPropertyDtoLandAreaTo;
    public string $WishPropertyDtoLocalities;
    /**
     * Format: int32
     */
    public int $WishPropertyDtoNumberRoomsFrom {
        set {
            $this->assigning('WishPropertyDtoNumberRoomsFrom', $value);
            $this->WishPropertyDtoNumberRoomsFrom = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $WishPropertyDtoNumberRoomsTo {
        set {
            $this->assigning('WishPropertyDtoNumberRoomsTo', $value);
            $this->WishPropertyDtoNumberRoomsTo = $value;
        }
    }
    /**
     * Format: double
     */
    public float $WishPropertyDtoPrice;
    /**
     * Format: double
     */
    public float $WishPropertyDtoPriceTo;
    public string $WishPropertyDtoRegions;
    public string $WishPropertyDtoTypes;
    public string $WishPropertyDtoTypologies;
    public string $WishPropertyDtoZones;
    public string $ZipCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Active' => is_bool($value) ? $this->Active = $value : parent::assignMember($name, $value),
            'ActivityArea' => is_string($value) ? $this->ActivityArea = $value : parent::assignMember($name, $value),
            'Address' => is_string($value) ? $this->Address = $value : parent::assignMember($name, $value),
            'Agency' => $value instanceof \stdClass ? $this->Agency = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency\AgencyDtoShort($value) : parent::assignMember($name, $value),
            'AgencyID' => is_int($value) ? $this->AgencyID = $value : parent::assignMember($name, $value),
            'AlreadyBought' => is_bool($value) ? $this->AlreadyBought = $value : parent::assignMember($name, $value),
            'BirthDate' => is_string($value) ? $this->BirthDate = $value : parent::assignMember($name, $value),
            'BrokerID' => is_int($value) ? $this->BrokerID = $value : parent::assignMember($name, $value),
            'Cellphone' => is_string($value) ? $this->Cellphone = $value : parent::assignMember($name, $value),
            'ColorCode' => is_string($value) ? $this->ColorCode = $value : parent::assignMember($name, $value),
            'ColorLevel' => is_int($value) ? $this->ColorLevel = $value : parent::assignMember($name, $value),
            'CompanyName' => is_string($value) ? $this->CompanyName = $value : parent::assignMember($name, $value),
            'CountryISO' => is_string($value) ? $this->CountryISO = $value : parent::assignMember($name, $value),
            'CreateDate' => is_string($value) ? $this->CreateDate = $value : parent::assignMember($name, $value),
            'CultureID' => is_int($value) ? $this->CultureID = $value : parent::assignMember($name, $value),
            'CustomerOriginID' => is_int($value) ? $this->CustomerOriginID = $value : parent::assignMember($name, $value),
            'EmailAddress' => is_string($value) ? $this->EmailAddress = $value : parent::assignMember($name, $value),
            'EntitiesLocale' => $value instanceof \stdClass ? $this->EntitiesLocale = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntitiesLocaleDto($value) : parent::assignMember($name, $value),
            'Entity1' => $value instanceof \stdClass ? $this->Entity1 = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityDto($value) : parent::assignMember($name, $value),
            'Entity2' => $value instanceof \stdClass ? $this->Entity2 = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityDto($value) : parent::assignMember($name, $value),
            'EntityAccessLevelID' => is_int($value) ? $this->EntityAccessLevelID = $value : parent::assignMember($name, $value),
            'EntityDefaultPhoto' => is_string($value) ? $this->EntityDefaultPhoto = $value : parent::assignMember($name, $value),
            'EntityFile' => $value instanceof \stdClass ? $this->EntityFile = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityFileDto($value) : parent::assignMember($name, $value),
            'EntityID' => is_int($value) ? $this->EntityID = $value : parent::assignMember($name, $value),
            'EntityName' => is_string($value) ? $this->EntityName = $value : parent::assignMember($name, $value),
            'EntityTitle' => is_string($value) ? $this->EntityTitle = $value : parent::assignMember($name, $value),
            'EntityType' => is_int($value) ? $this->EntityType = $value : parent::assignMember($name, $value),
            'ExternalCode' => is_string($value) ? $this->ExternalCode = $value : parent::assignMember($name, $value),
            'ExtraPhone1' => is_string($value) ? $this->ExtraPhone1 = $value : parent::assignMember($name, $value),
            'ExtraPhone1Desc' => is_string($value) ? $this->ExtraPhone1Desc = $value : parent::assignMember($name, $value),
            'ExtraPhone2' => is_string($value) ? $this->ExtraPhone2 = $value : parent::assignMember($name, $value),
            'ExtraPhone2Desc' => is_string($value) ? $this->ExtraPhone2Desc = $value : parent::assignMember($name, $value),
            'FacebookUrl' => is_string($value) ? $this->FacebookUrl = $value : parent::assignMember($name, $value),
            'Faxnumber' => is_string($value) ? $this->Faxnumber = $value : parent::assignMember($name, $value),
            'Filename' => is_string($value) ? $this->Filename = $value : parent::assignMember($name, $value),
            'GC_RefreshToken' => is_string($value) ? $this->GC_RefreshToken = $value : parent::assignMember($name, $value),
            'IncludeInMailings' => is_bool($value) ? $this->IncludeInMailings = $value : parent::assignMember($name, $value),
            'InstagramUrl' => is_string($value) ? $this->InstagramUrl = $value : parent::assignMember($name, $value),
            'JobTitle' => is_string($value) ? $this->JobTitle = $value : parent::assignMember($name, $value),
            'JobType' => is_int($value) ? $this->JobType = $value : parent::assignMember($name, $value),
            'LastAutoMailingDate' => is_string($value) ? $this->LastAutoMailingDate = $value : parent::assignMember($name, $value),
            'LastChangeDate' => is_string($value) ? $this->LastChangeDate = $value : parent::assignMember($name, $value),
            'LawyerID' => is_int($value) ? $this->LawyerID = $value : parent::assignMember($name, $value),
            'LinkedInUrl' => is_string($value) ? $this->LinkedInUrl = $value : parent::assignMember($name, $value),
            'NIB' => is_string($value) ? $this->NIB = $value : parent::assignMember($name, $value),
            'NewFromWebsite' => is_bool($value) ? $this->NewFromWebsite = $value : parent::assignMember($name, $value),
            'Notes' => is_string($value) ? $this->Notes = $value : parent::assignMember($name, $value),
            'Optin' => is_bool($value) ? $this->Optin = $value : parent::assignMember($name, $value),
            'OptinDate' => is_string($value) ? $this->OptinDate = $value : parent::assignMember($name, $value),
            'ParentAgencyID' => is_int($value) ? $this->ParentAgencyID = $value : parent::assignMember($name, $value),
            'PhoneNumber' => is_string($value) ? $this->PhoneNumber = $value : parent::assignMember($name, $value),
            'ReceivesSMS' => is_bool($value) ? $this->ReceivesSMS = $value : parent::assignMember($name, $value),
            'SpokenLanguages' => is_string($value) ? $this->SpokenLanguages = $value : parent::assignMember($name, $value),
            'TaxPayerNumber' => is_string($value) ? $this->TaxPayerNumber = $value : parent::assignMember($name, $value),
            'TelemarketerID' => is_int($value) ? $this->TelemarketerID = $value : parent::assignMember($name, $value),
            'Timezone' => is_string($value) ? $this->Timezone = $value : parent::assignMember($name, $value),
            'TwitterUrl' => is_string($value) ? $this->TwitterUrl = $value : parent::assignMember($name, $value),
            'UTCOffset' => is_string($value) ? $this->UTCOffset = $value : parent::assignMember($name, $value),
            'UserID' => is_int($value) ? $this->UserID = $value : parent::assignMember($name, $value),
            'VisibleOnLuxuryWebsite' => is_bool($value) ? $this->VisibleOnLuxuryWebsite = $value : parent::assignMember($name, $value),
            'VisibleOnWebsite' => is_bool($value) ? $this->VisibleOnWebsite = $value : parent::assignMember($name, $value),
            'VisitDate' => is_string($value) ? $this->VisitDate = $value : parent::assignMember($name, $value),
            'VisitNotes' => is_string($value) ? $this->VisitNotes = $value : parent::assignMember($name, $value),
            'Webpage' => is_string($value) ? $this->Webpage = $value : parent::assignMember($name, $value),
            'WishPropertyDtoCities' => is_string($value) ? $this->WishPropertyDtoCities = $value : parent::assignMember($name, $value),
            'WishPropertyDtoConditions' => is_string($value) ? $this->WishPropertyDtoConditions = $value : parent::assignMember($name, $value),
            'WishPropertyDtoDetailOptions' => is_string($value) ? $this->WishPropertyDtoDetailOptions = $value : parent::assignMember($name, $value),
            'WishPropertyDtoHouseAreaFrom' => is_float($value) ? $this->WishPropertyDtoHouseAreaFrom = $value : parent::assignMember($name, $value),
            'WishPropertyDtoHouseAreaTo' => is_float($value) ? $this->WishPropertyDtoHouseAreaTo = $value : parent::assignMember($name, $value),
            'WishPropertyDtoLandAreaFrom' => is_float($value) ? $this->WishPropertyDtoLandAreaFrom = $value : parent::assignMember($name, $value),
            'WishPropertyDtoLandAreaTo' => is_float($value) ? $this->WishPropertyDtoLandAreaTo = $value : parent::assignMember($name, $value),
            'WishPropertyDtoLocalities' => is_string($value) ? $this->WishPropertyDtoLocalities = $value : parent::assignMember($name, $value),
            'WishPropertyDtoNumberRoomsFrom' => is_int($value) ? $this->WishPropertyDtoNumberRoomsFrom = $value : parent::assignMember($name, $value),
            'WishPropertyDtoNumberRoomsTo' => is_int($value) ? $this->WishPropertyDtoNumberRoomsTo = $value : parent::assignMember($name, $value),
            'WishPropertyDtoPrice' => is_float($value) ? $this->WishPropertyDtoPrice = $value : parent::assignMember($name, $value),
            'WishPropertyDtoPriceTo' => is_float($value) ? $this->WishPropertyDtoPriceTo = $value : parent::assignMember($name, $value),
            'WishPropertyDtoRegions' => is_string($value) ? $this->WishPropertyDtoRegions = $value : parent::assignMember($name, $value),
            'WishPropertyDtoTypes' => is_string($value) ? $this->WishPropertyDtoTypes = $value : parent::assignMember($name, $value),
            'WishPropertyDtoTypologies' => is_string($value) ? $this->WishPropertyDtoTypologies = $value : parent::assignMember($name, $value),
            'WishPropertyDtoZones' => is_string($value) ? $this->WishPropertyDtoZones = $value : parent::assignMember($name, $value),
            'ZipCode' => is_string($value) ? $this->ZipCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
