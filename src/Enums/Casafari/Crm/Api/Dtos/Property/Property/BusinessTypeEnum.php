<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\Property;

enum BusinessTypeEnum: string
{
    case Leasing = 'Leasing';
    case PartExchange = 'PartExchange';
    case Rent = 'Rent';
    case RentWeekly = 'RentWeekly';
    case Sale = 'Sale';
    case SaleAndRent = 'SaleAndRent';
}
