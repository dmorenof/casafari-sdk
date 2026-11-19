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

}
