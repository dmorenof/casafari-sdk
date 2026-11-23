<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\CreateSmartLinkRequestV1\Settings;

enum ToIncludeEnum: string
{
    case Comparables = 'comparables';
    case DaysOnMarket = 'days_on_market';
    case History = 'history';
    case LocationIntelligence = 'location_intelligence';
    case MarketAnalytics = 'market_analytics';
    case Price = 'price';
    case PriceChange = 'price_change';
    case Sources = 'sources';
    case Valuation = 'valuation';
}
