<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\MarketAnalyticsApi;

enum DataPointEnum: string
{
    case AvailableOnMarket = 'available_on_market';
    case AvgPrice = 'avg_price';
    case AvgPricePsqm = 'avg_price_psqm';
    case New_ = 'new';
    case PriceDown = 'price_down';
    case PriceUp = 'price_up';
    case SoldOrRented = 'sold_or_rented';
}
