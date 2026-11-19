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

}
