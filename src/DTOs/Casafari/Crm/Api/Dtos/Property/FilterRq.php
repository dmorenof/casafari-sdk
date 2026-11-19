<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class FilterRq extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgencyId' => [
        'format' => 'int32',
    ],
    'AgentId' => [
        'format' => 'int32',
    ],
    'Building_Id' => [
        'format' => 'int32',
    ],
    'MaxBathrooms' => [
        'format' => 'int32',
    ],
    'MaxBedrooms' => [
        'format' => 'int32',
    ],
    'MaxLivingArea' => [
        'format' => 'int32',
    ],
    'MaxPlotArea' => [
        'format' => 'int32',
    ],
    'MaxResponses' => [
        'format' => 'int32',
    ],
    'MaxTotalArea' => [
        'format' => 'int32',
    ],
    'MinBathrooms' => [
        'format' => 'int32',
    ],
    'MinBedrooms' => [
        'format' => 'int32',
    ],
    'MinLivingArea' => [
        'format' => 'int32',
    ],
    'MinPlotArea' => [
        'format' => 'int32',
    ],
    'MinTotalArea' => [
        'format' => 'int32',
    ],
    'PortalId' => [
        'format' => 'int32',
    ],
    'PrimaryLangId' => [
        'format' => 'int32',
    ],
    'PropertyId' => [
        'format' => 'int32',
    ],
    'SequenceNmbr' => [
        'format' => 'int32',
    ],
];

    public bool $Active;
    /**
     * Format: int32
     */
    public int $AgencyId {
        set {
            $this->assigning('AgencyId', $value);
            $this->AgencyId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $AgentId {
        set {
            $this->assigning('AgentId', $value);
            $this->AgentId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $Building_Id {
        set {
            $this->assigning('Building_Id', $value);
            $this->Building_Id = $value;
        }
    }
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\FilterRq\TypeIdsCollection $BusinessTypeIds;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\FilterRq\ConditionTypeIdsArray\TypeIdsCollection $ConditionTypeIds;
    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     */
    public string $CorrelationId;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\FilterRq\DetailIdsCollection $DetailIds;
    /**
     * A reference for additional message identification, assigned by the requesting host system.
     */
    public string $EchoToken;
    public bool $ExcludeBuildings;
    public bool $ExcludePOA;
    public bool $Featured;
    /**
     * Allows to search properties by Title, PropertyType, Locality, City, Address, Zone, Region and Reference
     */
    public string $FreeText;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyFrom $From;
    public bool $HasExclusive;
    public bool $HasFloorplan;
    public bool $HasVideo;
    public bool $HasWidepanorama;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnertLocations $InnertLocations;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\FilterRq\LangEnum $Lang;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationList $Locations;
    /**
     * Format: int32
     */
    public int $MaxBathrooms {
        set {
            $this->assigning('MaxBathrooms', $value);
            $this->MaxBathrooms = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MaxBedrooms {
        set {
            $this->assigning('MaxBedrooms', $value);
            $this->MaxBedrooms = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MaxLivingArea {
        set {
            $this->assigning('MaxLivingArea', $value);
            $this->MaxLivingArea = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MaxPlotArea {
        set {
            $this->assigning('MaxPlotArea', $value);
            $this->MaxPlotArea = $value;
        }
    }
    /**
     * This is the number of properties that are get for each page (SequenceNmbr)
     * The Max amount of properties that can be get is 100
     * Format: int32
     */
    public int $MaxResponses {
        set {
            $this->assigning('MaxResponses', $value);
            $this->MaxResponses = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MaxTotalArea {
        set {
            $this->assigning('MaxTotalArea', $value);
            $this->MaxTotalArea = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MinBathrooms {
        set {
            $this->assigning('MinBathrooms', $value);
            $this->MinBathrooms = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MinBedrooms {
        set {
            $this->assigning('MinBedrooms', $value);
            $this->MinBedrooms = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MinLivingArea {
        set {
            $this->assigning('MinLivingArea', $value);
            $this->MinLivingArea = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MinPlotArea {
        set {
            $this->assigning('MinPlotArea', $value);
            $this->MinPlotArea = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $MinTotalArea {
        set {
            $this->assigning('MinTotalArea', $value);
            $this->MinTotalArea = $value;
        }
    }
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $NumericDetailIds;
    public bool $OnFocus;
    public bool $Opportunity;
    /**
     * Format: int32
     */
    public int $PortalId {
        set {
            $this->assigning('PortalId', $value);
            $this->PortalId = $value;
        }
    }
    /**
     * Format: double
     */
    public float $PriceFrom;
    /**
     * Format: double
     */
    public float $PriceTo;
    /**
     * The primary language preference for the message encoded as ISO 639-3.
     * Format: int32
     */
    public int $PrimaryLangId {
        set {
            $this->assigning('PrimaryLangId', $value);
            $this->PrimaryLangId = $value;
        }
    }
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $PropertyButtonIds;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $PropertyButtonIdsToExclude;
    /**
     * Format: int32
     */
    public int $PropertyId {
        set {
            $this->assigning('PropertyId', $value);
            $this->PropertyId = $value;
        }
    }
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $PropertyIds;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyDetailSearchIncludes $PropertyIncludes;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyListSorts $PropertyListSorts;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\FilterRq\PropertyTypeIdsArray\TypeIdsCollection $PropertyTypeIds;
    public string $Reference;
    /**
     * When true, indicates the message is being re-sent after a failure.
     */
    public bool $RetransmissionIndicator;
    public bool $ReturnAll;
    /**
     * This is used for pagination
     * Starts with the value 1
     * Format: int32
     */
    public int $SequenceNmbr {
        set {
            $this->assigning('SequenceNmbr', $value);
            $this->SequenceNmbr = $value;
        }
    }
    public bool $Sold;
    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the message.
     * Format: yyyy-MM-ddThh:mm:ssZ - UTC
     * Example: 2019-08-09T08:12:10+00:00
     */
    public string $TimeStamp;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\FilterRq\TypologyIdsCollection $TypologyIds;
    /**
     * The message version indicated by a decimal value.
     * Format: double
     */
    public float $Version;
    public bool $VisibleOnWebsite;
    public string $Zone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Active' => is_bool($value) ? $this->Active = $value : parent::assignMember($name, $value),
            'AgencyId' => is_int($value) ? $this->AgencyId = $value : parent::assignMember($name, $value),
            'AgentId' => is_int($value) ? $this->AgentId = $value : parent::assignMember($name, $value),
            'Building_Id' => is_int($value) ? $this->Building_Id = $value : parent::assignMember($name, $value),
            'CorrelationId' => is_string($value) ? $this->CorrelationId = $value : parent::assignMember($name, $value),
            'EchoToken' => is_string($value) ? $this->EchoToken = $value : parent::assignMember($name, $value),
            'ExcludeBuildings' => is_bool($value) ? $this->ExcludeBuildings = $value : parent::assignMember($name, $value),
            'ExcludePOA' => is_bool($value) ? $this->ExcludePOA = $value : parent::assignMember($name, $value),
            'Featured' => is_bool($value) ? $this->Featured = $value : parent::assignMember($name, $value),
            'FreeText' => is_string($value) ? $this->FreeText = $value : parent::assignMember($name, $value),
            'From' => $value instanceof \stdClass ? $this->From = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyFrom($value) : parent::assignMember($name, $value),
            'HasExclusive' => is_bool($value) ? $this->HasExclusive = $value : parent::assignMember($name, $value),
            'HasFloorplan' => is_bool($value) ? $this->HasFloorplan = $value : parent::assignMember($name, $value),
            'HasVideo' => is_bool($value) ? $this->HasVideo = $value : parent::assignMember($name, $value),
            'HasWidepanorama' => is_bool($value) ? $this->HasWidepanorama = $value : parent::assignMember($name, $value),
            'InnertLocations' => $value instanceof \stdClass ? $this->InnertLocations = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\InnertLocations($value) : parent::assignMember($name, $value),
            'Lang' => is_string($value) ? $this->Lang = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\FilterRq\LangEnum::from($value) : parent::assignMember($name, $value),
            'Locations' => $value instanceof \stdClass ? $this->Locations = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocationList($value) : parent::assignMember($name, $value),
            'MaxBathrooms' => is_int($value) ? $this->MaxBathrooms = $value : parent::assignMember($name, $value),
            'MaxBedrooms' => is_int($value) ? $this->MaxBedrooms = $value : parent::assignMember($name, $value),
            'MaxLivingArea' => is_int($value) ? $this->MaxLivingArea = $value : parent::assignMember($name, $value),
            'MaxPlotArea' => is_int($value) ? $this->MaxPlotArea = $value : parent::assignMember($name, $value),
            'MaxResponses' => is_int($value) ? $this->MaxResponses = $value : parent::assignMember($name, $value),
            'MaxTotalArea' => is_int($value) ? $this->MaxTotalArea = $value : parent::assignMember($name, $value),
            'MinBathrooms' => is_int($value) ? $this->MinBathrooms = $value : parent::assignMember($name, $value),
            'MinBedrooms' => is_int($value) ? $this->MinBedrooms = $value : parent::assignMember($name, $value),
            'MinLivingArea' => is_int($value) ? $this->MinLivingArea = $value : parent::assignMember($name, $value),
            'MinPlotArea' => is_int($value) ? $this->MinPlotArea = $value : parent::assignMember($name, $value),
            'MinTotalArea' => is_int($value) ? $this->MinTotalArea = $value : parent::assignMember($name, $value),
            'NumericDetailIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->NumericDetailIds = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            'OnFocus' => is_bool($value) ? $this->OnFocus = $value : parent::assignMember($name, $value),
            'Opportunity' => is_bool($value) ? $this->Opportunity = $value : parent::assignMember($name, $value),
            'PortalId' => is_int($value) ? $this->PortalId = $value : parent::assignMember($name, $value),
            'PriceFrom' => is_float($value) ? $this->PriceFrom = $value : parent::assignMember($name, $value),
            'PriceTo' => is_float($value) ? $this->PriceTo = $value : parent::assignMember($name, $value),
            'PrimaryLangId' => is_int($value) ? $this->PrimaryLangId = $value : parent::assignMember($name, $value),
            'PropertyButtonIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->PropertyButtonIds = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            'PropertyButtonIdsToExclude' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->PropertyButtonIdsToExclude = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            'PropertyId' => is_int($value) ? $this->PropertyId = $value : parent::assignMember($name, $value),
            'PropertyIds' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->PropertyIds = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection($value) : parent::assignMember($name, $value),
            'PropertyIncludes' => $value instanceof \stdClass ? $this->PropertyIncludes = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyDetailSearchIncludes($value) : parent::assignMember($name, $value),
            'PropertyListSorts' => $value instanceof \stdClass ? $this->PropertyListSorts = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyListSorts($value) : parent::assignMember($name, $value),
            'Reference' => is_string($value) ? $this->Reference = $value : parent::assignMember($name, $value),
            'RetransmissionIndicator' => is_bool($value) ? $this->RetransmissionIndicator = $value : parent::assignMember($name, $value),
            'ReturnAll' => is_bool($value) ? $this->ReturnAll = $value : parent::assignMember($name, $value),
            'SequenceNmbr' => is_int($value) ? $this->SequenceNmbr = $value : parent::assignMember($name, $value),
            'Sold' => is_bool($value) ? $this->Sold = $value : parent::assignMember($name, $value),
            'TimeStamp' => is_string($value) ? $this->TimeStamp = $value : parent::assignMember($name, $value),
            'Version' => is_float($value) ? $this->Version = $value : parent::assignMember($name, $value),
            'VisibleOnWebsite' => is_bool($value) ? $this->VisibleOnWebsite = $value : parent::assignMember($name, $value),
            'Zone' => is_string($value) ? $this->Zone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
