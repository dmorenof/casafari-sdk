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
    public int $bathrooms {
        set {
            $this->assigning('bathrooms', $value);
            $this->bathrooms = $value;
        }
    }
    /**
     * Number of rooms
     * Format: int32
     */
    public int $bedrooms {
        set {
            $this->assigning('bedrooms', $value);
            $this->bedrooms = $value;
        }
    }
    /**
     * property id of the building
     * Format: int32
     */
    public int $building_id {
        set {
            $this->assigning('building_id', $value);
            $this->building_id = $value;
        }
    }
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
    public int $construction_year {
        set {
            $this->assigning('construction_year', $value);
            $this->construction_year = $value;
        }
    }
    /**
     * Format: date-time
     */
    public string $createDate {
        set {
            $this->assigning('createDate', $value);
            $this->createDate = $value;
        }
    }
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
    public int $floorNumber {
        set {
            $this->assigning('floorNumber', $value);
            $this->floorNumber = $value;
        }
    }
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
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * Property InternalId will be used to sync the two systems.
     */
    public string $internalId;
    /**
     * Format: date-time
     */
    public string $lastChangeDate {
        set {
            $this->assigning('lastChangeDate', $value);
            $this->lastChangeDate = $value;
        }
    }
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
    public int $numberOfFloors {
        set {
            $this->assigning('numberOfFloors', $value);
            $this->numberOfFloors = $value;
        }
    }
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
    public int $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
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
    public int $propertyId {
        set {
            $this->assigning('propertyId', $value);
            $this->propertyId = $value;
        }
    }
    /**
     * Property reference
     */
    public string $reference;
    /**
     * Property sale/rent price
     * Format: int32
     */
    public int $second_price {
        set {
            $this->assigning('second_price', $value);
            $this->second_price = $value;
        }
    }
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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Featured' => is_bool($value) ? $this->Featured = $value : parent::assignMember($name, $value),
            'OnFocus' => is_bool($value) ? $this->OnFocus = $value : parent::assignMember($name, $value),
            'Opportunity' => is_bool($value) ? $this->Opportunity = $value : parent::assignMember($name, $value),
            'ami' => is_string($value) ? $this->ami = $value : parent::assignMember($name, $value),
            'bathrooms' => is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'bedrooms' => is_int($value) ? $this->bedrooms = $value : parent::assignMember($name, $value),
            'building_id' => is_int($value) ? $this->building_id = $value : parent::assignMember($name, $value),
            'businessType' => is_string($value) ? $this->businessType = $value : parent::assignMember($name, $value),
            'businessTypeLocale' => is_string($value) ? $this->businessTypeLocale = $value : parent::assignMember($name, $value),
            'cadastralReference' => is_string($value) ? $this->cadastralReference = $value : parent::assignMember($name, $value),
            'conditionTypeLocale' => is_string($value) ? $this->conditionTypeLocale = $value : parent::assignMember($name, $value),
            'condition_type' => is_string($value) ? $this->condition_type = $value : parent::assignMember($name, $value),
            'construction_year' => is_int($value) ? $this->construction_year = $value : parent::assignMember($name, $value),
            'createDate' => is_string($value) ? $this->createDate = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'energy_rating' => is_string($value) ? $this->energy_rating = $value : parent::assignMember($name, $value),
            'exclusive' => is_bool($value) ? $this->exclusive = $value : parent::assignMember($name, $value),
            'features_list' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->features_list = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'features_list_categorized' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->features_list_categorized = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyList\ListCategorizedCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\DetailsObjects::class)) : parent::assignMember($name, $value),
            'features_list_enum' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->features_list_enum = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'files' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->files = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\FilesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyFiles::class)) : parent::assignMember($name, $value),
            'floorNumber' => is_int($value) ? $this->floorNumber = $value : parent::assignMember($name, $value),
            'floorNumberString' => is_string($value) ? $this->floorNumberString = $value : parent::assignMember($name, $value),
            'floorplan' => is_string($value) ? $this->floorplan = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'internalId' => is_string($value) ? $this->internalId = $value : parent::assignMember($name, $value),
            'lastChangeDate' => is_string($value) ? $this->lastChangeDate = $value : parent::assignMember($name, $value),
            'listing_agent' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->listing_agent = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyList\ListingAgentCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\ListingAgent::class)) : parent::assignMember($name, $value),
            'living_area' => is_float($value) ? $this->living_area = $value : parent::assignMember($name, $value),
            'locale' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->locale = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\PropertyList\LocaleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\LocaleList::class)) : parent::assignMember($name, $value),
            'location' => $value instanceof \stdClass ? $this->location = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyLocationList($value) : parent::assignMember($name, $value),
            'numberOfFloors' => is_int($value) ? $this->numberOfFloors = $value : parent::assignMember($name, $value),
            'photos' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->photos = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\PhotosCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyPhotos::class)) : parent::assignMember($name, $value),
            'photosWithoutWatermark' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->photosWithoutWatermark = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\PhotosCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\PropertyPhotos::class)) : parent::assignMember($name, $value),
            'plot_area' => is_float($value) ? $this->plot_area = $value : parent::assignMember($name, $value),
            'price' => is_int($value) ? $this->price = $value : parent::assignMember($name, $value),
            'price_visible' => is_bool($value) ? $this->price_visible = $value : parent::assignMember($name, $value),
            'priceprefixhelper' => is_string($value) ? $this->priceprefixhelper = $value : parent::assignMember($name, $value),
            'propertyId' => is_int($value) ? $this->propertyId = $value : parent::assignMember($name, $value),
            'reference' => is_string($value) ? $this->reference = $value : parent::assignMember($name, $value),
            'second_price' => is_int($value) ? $this->second_price = $value : parent::assignMember($name, $value),
            'sold' => is_bool($value) ? $this->sold = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'total_area' => is_float($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'typeLocale' => is_string($value) ? $this->typeLocale = $value : parent::assignMember($name, $value),
            'typology' => is_string($value) ? $this->typology = $value : parent::assignMember($name, $value),
            'video' => is_string($value) ? $this->video = $value : parent::assignMember($name, $value),
            'visibleOnWebsite' => is_bool($value) ? $this->visibleOnWebsite = $value : parent::assignMember($name, $value),
            'widepanorama' => is_string($value) ? $this->widepanorama = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
