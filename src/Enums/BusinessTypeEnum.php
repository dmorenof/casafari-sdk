<?php

namespace CasafariSDK\Enums;

/**
 * Enum for Property->businessType
 */
enum BusinessTypeEnum: string
{
    case Sale = "Sale";
    case RentWeekly = "RentWeekly";
    case Rent = "Rent";
    case Leasing = "Leasing";
    case PartExchange = "PartExchange";
    case SaleAndRent = "SaleAndRent";
}