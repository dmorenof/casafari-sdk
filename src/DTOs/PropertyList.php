<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
use CasafariSDK\Enums\BusinessTypeEnum;
use CasafariSDK\Enums\CurrencyEnum;
use CasafariSDK\Enums\EnergyRatingEnum;
use CasafariSDK\Enums\PropertyConditionTypeEnum;
use CasafariSDK\Enums\PropertyStatusEnum;
use CasafariSDK\Enums\PropertyTypeEnum;
use CasafariSDK\TypedArrays\DetailsObjectsArray;
use CasafariSDK\TypedArrays\FeatureEnumsArray;
use CasafariSDK\TypedArrays\FilesArray;
use CasafariSDK\TypedArrays\ListingAgentsArray;
use CasafariSDK\TypedArrays\LocaleListsArray;
use CasafariSDK\TypedArrays\PhotosArray;
use CasafariSDK\TypedArrays\PortalEnumsArray;
use CasafariSDK\TypedArrays\StringsArray;

class PropertyList extends DTO
{
    public int $id;
    public string $businessTypeLocale;
    public string $typeLocale;
    public string $conditionTypeLocale;
    public bool $OnFocus;
    public bool $Opportunity;
    public bool $Featured;
    public string $building_id;
    public string $priceprefixhelper;
    public string $typology;
    public StringsArray $features_list_enum;
    public DetailsObjectsArray $features_list_categorized;
    public string $ami;
    public LocaleListsArray $locale;
    public ?int $propertyId;
    public string $internalId;
    public string $reference;
    public PropertyStatusEnum $status;
    public bool $sold;
    public bool $visibleOnWebsite;
    public PropertyTypeEnum $type;
    public int $bathrooms;
    public int $bedrooms;
    public PropertyConditionTypeEnum $condition_type;
    public int $construction_year;
    public int $price;
    public int $second_price;
    public bool $price_visible;
    public CurrencyEnum $currency;
    public BusinessTypeEnum $businessType;
    public float $plot_area;
    public float $living_area;
    public float $total_area;
    public EnergyRatingEnum $energy_rating;
    public FeatureEnumsArray $features_list;
    public LocationList $location;
    public ListingAgentsArray $listing_agent;
    public PhotosArray $photos;
    public PhotosArray $photosWithoutWatermark;
    public FilesArray $files;
    public PortalEnumsArray $portals;
    public string $video;
    public string $widepanorama;
    public string $floorplan;
    public int $numberOfFloors;
    public int $floorNumber;
    public string $floorNumberString;
    public bool $exclusive;
    public string $cadastralReference;
    public string $createDate;
    public string $lastChangeDate;
    public string $inactiveReason;
}