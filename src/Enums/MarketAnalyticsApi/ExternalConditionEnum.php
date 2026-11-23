<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\MarketAnalyticsApi;

enum ExternalConditionEnum: string
{
    case New_ = 'new';
    case Other = 'other';
    case Ruin = 'ruin';
    case Used = 'used';
    case VeryGood = 'very-good';
}
