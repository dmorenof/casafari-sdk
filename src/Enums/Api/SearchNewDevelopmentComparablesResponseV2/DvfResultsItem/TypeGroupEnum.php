<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\SearchNewDevelopmentComparablesResponseV2\DvfResultsItem;

enum TypeGroupEnum: string
{
    case Apartment = 'apartment';
    case House = 'house';
    case Investment = 'investment';
    case Other = 'other';
    case Plot = 'plot';
}
