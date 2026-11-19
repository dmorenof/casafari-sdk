<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'internalId',
    'propertyId',
    'reference',
];

    protected const array VALIDATION = [
    'bathrooms' => [
        'format' => 'int32',
    ],
    'bedrooms' => [
        'format' => 'int32',
    ],
    'building_id' => [
        'format' => 'int32',
    ],
    'construction_year' => [
        'format' => 'int32',
    ],
    'createDate' => [
        'format' => 'date-time',
    ],
    'floorNumber' => [
        'format' => 'int32',
    ],
    'id' => [
        'format' => 'int32',
    ],
    'lastChangeDate' => [
        'format' => 'date-time',
    ],
    'numberOfFloors' => [
        'format' => 'int32',
    ],
    'price' => [
        'format' => 'int32',
    ],
    'propertyId' => [
        'format' => 'int32',
    ],
    'second_price' => [
        'format' => 'int32',
    ],
];

    public bool $Featured;
    public bool $OnFocus;
    public bool $Opportunity;
    public string $ami;
    /**
     * Number of bathrooms
     * Format: int32
     */
    public int $bathrooms;
    /**
     * Number of rooms
     * Format: int32
     */
    public int $bedrooms;
    /**
     * property id of the building
     * Format: int32
     */
    public int $building_id;
    /**
     * Property business type
     */
    public string $businessType;
    /**
     * Property business type locale
     */
    public string $businessTypeLocale;
    /**
     * Property Cadastral Reference
     */
    public string $cadastralReference;
    /**
     * Property condition type locale
     */
    public string $conditionTypeLocale;
    /**
     * Property Condition Type
     */
    public string $condition_type;
    /**
     * Property built year
     * Format: int32
     */
    public int $construction_year;
    /**
     * Format: date-time
     */
    public string $createDate;
    /**
     * Property price
     */
    public string $currency;
    /**
     * Property energy rating
     */
    public string $energy_rating;
    /**
     * Property is Exclusive
     */
    public bool $exclusive;
    /**
     * Property Features List
     */
    public \CasafariSDK\Collections\StringCollection $features_list;
    /**
     * property FeatureListCategorized
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyList\ListCategorizedCollection $features_list_categorized;
    /**
     * property FeaturesListEnum
     */
    public \CasafariSDK\Collections\StringCollection $features_list_enum;
    /**
     * Property Files
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\FilesCollection $files;
    /**
     * Floor Number
     * Format: int32
     */
    public int $floorNumber;
    /**
     * Floor Number string
     */
    public string $floorNumberString;
    /**
     * floorplan
     */
    public string $floorplan;
    /**
     * Record Id
     * Format: int32
     */
    public int $id;
    /**
     * Property InternalId will be used to sync the two systems.
     */
    public string $internalId;
    /**
     * Format: date-time
     */
    public string $lastChangeDate;
    /**
     * Email of assigned agent
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyList\ListingAgentCollection $listing_agent;
    /**
     * property living area
     * Format: double
     */
    public float $living_area;
    /**
     * Multi culture property descriptions
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyList\LocaleCollection $locale;
    /**
     * Property location
     */
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyLocationList $location;
    /**
     * Number Of Floors
     * Format: int32
     */
    public int $numberOfFloors;
    /**
     * Property Photos
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\PhotosCollection $photos;
    /**
     * Property Photos
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\PhotosCollection $photosWithoutWatermark;
    /**
     * Property land area
     * Format: double
     */
    public float $plot_area;
    /**
     * Portal to sell property
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyList\PortalsCollection $portals;
    /**
     * Property sale/rent price
     * Format: int32
     */
    public int $price;
    /**
     * Property price_visible
     */
    public bool $price_visible;
    /**
     * currency code: EUR, USD, etc
     */
    public string $priceprefixhelper;
    /**
     * Property Id will be used to sync the two systems.
     * Format: int32
     */
    public int $propertyId;
    /**
     * Property reference
     */
    public string $reference;
    /**
     * Property sale/rent price
     * Format: int32
     */
    public int $second_price;
    /**
     * To indicate that property marked is sold
     */
    public bool $sold;
    /**
     * Property status
     */
    public string $status;
    /**
     * property total area
     * Format: double
     */
    public float $total_area;
    /**
     * Property type
     */
    public string $type;
    /**
     * Property type locale
     */
    public string $typeLocale;
    /**
     * property Typology
     */
    public string $typology;
    /**
     * video
     */
    public string $video;
    /**
     * To indicate to show property on website
     */
    public bool $visibleOnWebsite;
    /**
     * Floorplan
     */
    public string $widepanorama;

}
