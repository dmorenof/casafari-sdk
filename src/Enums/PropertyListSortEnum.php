<?php

namespace CasafariSDK\Enums;

/**
 * Enum representing the sorting options for a property list.
 */
enum PropertyListSortEnum: string
{
    case DateAsc = "DateAsc";
    case DateDesc = "DateDesc";
    case PriceAsc = "PriceAsc";
    case PriceDesc = "PriceDesc";
    case LastChangeDate = "LastChangeDate";
    case PropertyIdAsc = "PropertyIdAsc";
    case PropertyIdDesc = "PropertyIdDesc";
    case PropertyExclusiveAsc = "PropertyExclusiveAsc";
    case PropertyExclusiveDesc = "PropertyExclusiveDesc";
    case ModifiedDateAsc = "ModifiedDateAsc";
    case ModifiedDateDesc = "ModifiedDateDesc";
    case PropertyExclusiveAndOnFocusAsc = "PropertyExclusiveAndOnFocusAsc";
    case PropertyExclusiveAndOnFocusDesc = "PropertyExclusiveAndOnFocusDesc";
}
