<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class Property extends \Dmorenof\SdkRuntime\DTO
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
    'construction_year' => [
        'format' => 'int32',
    ],
    'createDate' => [
        'format' => 'date-time',
    ],
    'floorNumber' => [
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
     * Property business type
     */
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property\BusinessTypeEnum $businessType;
    /**
     * Property Cadastral Reference
     */
    public string $cadastralReference;
    /**
     * Property Condition Type
     */
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property\ConditionTypeEnum $condition_type;
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
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property\CurrencyEnum $currency;
    /**
     * Property energy rating
     */
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property\EnergyRatingEnum $energy_rating;
    /**
     * Property is Exclusive
     */
    public bool $exclusive;
    /**
     * Property Features List
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\FeaturesListCollection $features_list;
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
    public string $listing_agent;
    /**
     * property living area
     * Format: double
     */
    public float $living_area;
    /**
     * Multi culture property descriptions
     */
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\LocaleCollection $locale;
    /**
     * Property location
     */
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\Location $location;
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
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\Property\PortalsCollection $portals;
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
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property\StatusEnum $status;
    /**
     * property total area
     * Format: double
     */
    public float $total_area;
    /**
     * Property type
     */
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property\TypeEnum $type;
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
