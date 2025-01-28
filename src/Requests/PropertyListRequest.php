<?php

namespace CasafariSDK\Requests;

use CasafariSDK\Core\Request;
use CasafariSDK\DTOs\From;
use CasafariSDK\DTOs\InnertLocations;
use CasafariSDK\DTOs\PropertyIncludes;
use CasafariSDK\Enums\LanguageEnum;
use CasafariSDK\TypedArrays\BusinessTypeEnumsArray;
use CasafariSDK\TypedArrays\ConditionTypeIdEnumsArray;
use CasafariSDK\TypedArrays\FeatureEnumsArray;
use CasafariSDK\TypedArrays\IntegersArray;
use CasafariSDK\TypedArrays\LocationListsArray;
use CasafariSDK\TypedArrays\PropertyListSortEnumsArray;
use CasafariSDK\TypedArrays\PropertyTypeIdEnumsArray;
use CasafariSDK\TypedArrays\TypologyIdEnumsArray;

/**
 * Example JSON
 * <code>
 * {
 *     "PropertyIncludes": {
 *         "IncludeFeatures": true,
 *         "IncludeBrokers": true,
 *         "IncludeAgency": true,
 *         "UseHtmlDescription": true,
 *         "IncludeFeaturesByCategory": true,
 *         "GetAgencyIsShopAsPropertyAgency": true,
 *         "IncludePropertyOccupations": true
 *     },
 *     "PropertyId": 0,
 *     "PortalId": 0,
 *     "PropertyIds": [
 *         0
 *     ],
 *     "PropertyButtonIds": [
 *         0
 *     ],
 *     "PropertyButtonIdsToExclude": [
 *         0
 *     ],
 *     "Reference": "string",
 *     "BusinessTypeIds": [
 *         "Sale"
 *     ],
 *     "ConditionTypeIds": [
 *         "New"
 *     ],
 *     "PropertyTypeIds": [
 *         "Apartment"
 *     ],
 *     "TypologyIds": [
 *         "NotApplicable"
 *     ],
 *     "DetailIds": [
 *         "AirConditioning"
 *     ],
 *     "NumericDetailIds": [
 *         0
 *     ],
 *     "Locations": {
 *         "CountryCode": "pt",
 *         "LocationIds": [
 *             0
 *         ]
 *     },
 *     "PriceFrom": 0.1,
 *     "PriceTo": 0.1,
 *     "MinBedrooms": 0,
 *     "MaxBedrooms": 0,
 *     "MinBathrooms": 0,
 *     "MaxBathrooms": 0,
 *     "MinLivingArea": 0,
 *     "MaxLivingArea": 0,
 *     "MinPlotArea": 0,
 *     "MaxPlotArea": 0,
 *     "MinTotalArea": 0,
 *     "MaxTotalArea": 0,
 *     "OnFocus": true,
 *     "Opportunity": true,
 *     "Featured": true,
 *     "ReturnAll": true,
 *     "ExcludeBuildings": true,
 *     "Active": true,
 *     "VisibleOnWebsite": true,
 *     "Sold": true,
 *     "Building_Id": 0,
 *     "Zone": "string",
 *     "SequenceNmbr": 0,
 *     "MaxResponses": 0,
 *     "Lang": "pt",
 *     "HasVideo": true,
 *     "HasFloorplan": true,
 *     "HasWidepanorama": true,
 *     "HasExclusive": true,
 *     "ExcludePOA": true,
 *     "AgentId": 0,
 *     "AgencyId": 0,
 *     "PropertyListSorts": {
 *         "SortBy": "DateAsc"
 *     },
 *     "InnertLocations": {
 *         "RegionIds": [
 *             0
 *         ],
 *         "CityIds": [
 *             0
 *         ],
 *         "LocalityIds": [
 *             0
 *         ],
 *         "Zonenames": [
 *             "string"
 *         ]
 *     },
 *     "From": {
 *         "Date": "2019-08-24T14:15:22Z",
 *         "Type": "Created"
 *     },
 *     "FreeText": "string",
 *     "CorrelationId": "string",
 *     "EchoToken": "string",
 *     "PrimaryLangId": 0,
 *     "RetransmissionIndicator": true,
 *     "TimeStamp": "string",
 *     "Version": 0.1
 * }
 * </code>
 */
class PropertyListRequest extends Request
{
    public PropertyIncludes $PropertyIncludes;
    public int $PropertyId;
    public int $PortalId;
    public IntegersArray $PropertyIds;
    public IntegersArray $PropertyButtonIds;
    public IntegersArray $PropertyButtonIdsToExclude;
    public string $Reference;
    public BusinessTypeEnumsArray $BusinessTypeIds;
    public ConditionTypeIdEnumsArray $ConditionTypeIds;
    public PropertyTypeIdEnumsArray $PropertyTypeIds;
    public TypologyIdEnumsArray $TypologyIds;
    public FeatureEnumsArray $DetailIds;
    public IntegersArray $NumericDetailIds;
    public LocationListsArray $Locations;
    public float $PriceFrom;
    public float $PriceTo;
    public int $MinBedrooms;
    public int $MaxBedrooms;
    public int $MinBathrooms;
    public int $MaxBathrooms;
    public int $MinLivingArea;
    public int $MaxLivingArea;
    public int $MinPlotArea;
    public int $MaxPlotArea;
    public int $MinTotalArea;
    public int $MaxTotalArea;
    public bool $OnFocus;
    public bool $Opportunity;
    public bool $Featured;
    public bool $ReturnAll;
    public bool $ExcludeBuildings;
    public bool $Active;
    public bool $VisibleOnWebsite;
    public bool $Sold;
    public int $Building_Id;
    public string $Zone;
    public int $SequenceNmbr;
    public int $MaxResponses;
    public LanguageEnum $Lang;
    public bool $HasVideo;
    public bool $HasFloorplan;
    public bool $HasWidepanorama;
    public bool $HasExclusive;
    public bool $ExcludePOA;
    public int $AgentId;
    public int $AgencyId;
    public PropertyListSortEnumsArray $PropertyListSorts;
    public InnertLocations $InnertLocations;
    public From $From;
    public string $FreeText;
}