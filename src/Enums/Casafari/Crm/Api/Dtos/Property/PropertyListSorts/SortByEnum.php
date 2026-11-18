<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\PropertyListSorts;

enum SortByEnum: string
{
    case DateAsc = 'DateAsc';
    case DateDesc = 'DateDesc';
    case LastChangeDate = 'LastChangeDate';
    case ModifiedDateAsc = 'ModifiedDateAsc';
    case ModifiedDateDesc = 'ModifiedDateDesc';
    case PriceAsc = 'PriceAsc';
    case PriceDesc = 'PriceDesc';
    case PropertyExclusiveAndOnFocusAsc = 'PropertyExclusiveAndOnFocusAsc';
    case PropertyExclusiveAndOnFocusDesc = 'PropertyExclusiveAndOnFocusDesc';
    case PropertyExclusiveAsc = 'PropertyExclusiveAsc';
    case PropertyExclusiveDesc = 'PropertyExclusiveDesc';
    case PropertyIdAsc = 'PropertyIdAsc';
    case PropertyIdDesc = 'PropertyIdDesc';
}
