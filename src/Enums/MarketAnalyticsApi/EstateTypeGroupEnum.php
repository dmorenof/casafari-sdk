<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\MarketAnalyticsApi;

enum EstateTypeGroupEnum: string
{
    case Apartment = 'apartment';
    case Building = 'building';
    case Development = 'development';
    case House = 'house';
    case Investment = 'investment';
    case Other = 'other';
    case Plot = 'plot';
    case Room = 'room';
}
