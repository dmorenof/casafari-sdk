<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\MarketAnalyticsApi;

enum DataPointIntervalEnum: string
{
    case Month = 'month';
    case Quarter = 'quarter';
    case Week = 'week';
    case Year = 'year';
}
