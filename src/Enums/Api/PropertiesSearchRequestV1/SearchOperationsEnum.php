<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\PropertiesSearchRequestV1;

enum SearchOperationsEnum: string
{
    case Rent = 'rent';
    case RentHold = 'rent_hold';
    case Rented = 'rented';
    case Sale = 'sale';
    case SaleHold = 'sale_hold';
    case Sold = 'sold';
}
