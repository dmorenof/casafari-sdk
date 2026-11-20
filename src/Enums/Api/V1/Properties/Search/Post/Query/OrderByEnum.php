<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\V1\Properties\Search\Post\Query;

enum OrderByEnum: string
{
    case Bedrooms = 'bedrooms';
    case ConstructionYear = 'construction_year';
    case LastUpdate = 'last_update';
    case PlotArea = 'plot_area';
    case Price = 'price';
    case PricePerSqm = 'price_per_sqm';
    case TimeOnMarket = 'time_on_market';
    case TotalArea = 'total_area';
}
