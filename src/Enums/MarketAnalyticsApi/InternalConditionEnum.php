<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\MarketAnalyticsApi;

enum InternalConditionEnum: string
{
    case New_ = 'new';
    case ToRefurbish = 'to-refurbish';
    case Unknown = 'unknown';
    case Used = 'used';
    case VeryGood = 'very-good';
}
