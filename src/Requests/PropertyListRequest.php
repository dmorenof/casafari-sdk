<?php

namespace CasafariSDK\Requests;

use CasafariSDK\Core\Request;

/**
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
 */
class PropertyListRequest extends Request
{
    public $PropertyIncludes;
    public $PropertyId;
    public $PortalId;
    public $PropertyIds;
    public $PropertyButtonIds;
    public $PropertyButtonIdsToExclude;
    public $Reference;
    public $BusinessTypeIds;
    public $ConditionTypeIds;
    public $PropertyTypeIds;
    public $TypologyIds;
    public $DetailIds;
    public $NumericDetailIds;
    public $Locations;
    public $PriceFrom;
    public $PriceTo;
    public $MinBedrooms;
    public $MaxBedrooms;
    public $MinBathrooms;
    public $MaxBathrooms;
    public $MinLivingArea;
    public $MaxLivingArea;
    public $MinPlotArea;
    public $MaxPlotArea;
    public $MinTotalArea;
    public $MaxTotalArea;
    public $OnFocus;
    public $Opportunity;
    public $Featured;
    public $ReturnAll;
    public $ExcludeBuildings;
    public $Active;
    public $VisibleOnWebsite;
    public $Sold;
    public $Building_Id;
    public $Zone;
    public $SequenceNmbr;
    public $MaxResponses;
    public $Lang;
    public $HasVideo;
    public $HasFloorplan;
    public $HasWidepanorama;
    public $HasExclusive;
    public $ExcludePOA;
    public $AgentId;
    public $AgencyId;
    public $PropertyListSorts;
    public $InnertLocations;
    public \CasafariSDK\Entities\From $From;
    public string $FreeText;
}