<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
use CasafariSDK\Enums\BusinessTypeEnum;
use CasafariSDK\Enums\CurrencyEnum;
use CasafariSDK\Enums\EnergyRatingEnum;
use CasafariSDK\Enums\PropertyConditionTypeEnum;
use CasafariSDK\Enums\PropertyStatusEnum;
use CasafariSDK\Enums\PropertyTypeEnum;
use CasafariSDK\TypedArrays\FeaturesArray;
use CasafariSDK\TypedArrays\FilesArray;
use CasafariSDK\TypedArrays\LocalesArray;
use CasafariSDK\TypedArrays\PhotosArray;
use CasafariSDK\TypedArrays\PortalsArray;

/**
 * Casafari Property object
 * <code>
 * {
 *     "propertyId": 0,
 *     "internalId": "string",
 *     "reference": "string",
 *     "status": "Active",
 *     "sold": true,
 *     "visibleOnWebsite": true,
 *     "type": "Apartment",
 *     "bathrooms": 0,
 *     "bedrooms": 0,
 *     "condition_type": "New",
 *     "construction_year": 0,
 *     "price": 0,
 *     "second_price": 0,
 *     "price_visible": true,
 *     "currency": "EUR",
 *     "businessType": "Sale",
 *     "plot_area": 0.1,
 *     "living_area": 0.1,
 *     "total_area": 0.1,
 *     "locale": [],
 *     "energy_rating": "APlus",
 *     "features_list": [],
 *     "location": {},
 *     "listing_agent": "string",
 *     "photos": [],
 *     "photosWithoutWatermark": [],
 *     "files": [],
 *     "portals": [],
 *     "video": "string",
 *     "widepanorama": "string",
 *     "floorplan": "string",
 *     "numberOfFloors": 0,
 *     "floorNumber": 0,
 *     "floorNumberString": "string",
 *     "exclusive": true,
 *     "cadastralReference": "string",
 *     "createDate": "2019-08-24T14:15:22Z",
 *     "lastChangeDate": "2019-08-24T14:15:22Z"
 * }
 * </code>
 */
class Property extends DTO
{
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
    public LocalesArray $locale;
    public EnergyRatingEnum $energy_rating;
    public FeaturesArray $features_list;
    public Location $location;
    public string $listing_agent;
    public PhotosArray $photos;
    public PhotosArray $photosWithoutWatermark;
    public FilesArray $files;
    public PortalsArray $portals;
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