<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertsFeedV1\Filter;

enum CharacteristicsEnum: string
{
    case AirConditioning = 'air_conditioning';
    case Balcony = 'balcony';
    case BusinessTransfer = 'business_transfer';
    case Elevator = 'elevator';
    case Furniture = 'furniture';
    case Garage = 'garage';
    case Garden = 'garden';
    case LifeAnnuity = 'life_annuity';
    case NoElevator = 'no_elevator';
    case Parking = 'parking';
    case RentalLicense = 'rental_license';
    case RentedOut = 'rented_out';
    case SmokeOutlet = 'smoke_outlet';
    case Storage = 'storage';
    case SwimmingPool = 'swimming_pool';
    case Terrace = 'terrace';
}
