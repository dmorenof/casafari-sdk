<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\AlertsApi;

enum AlertSubtypeEnum: string
{
    case Delisted = 'delisted';
    case New_ = 'new';
    case PriceDown = 'price_down';
    case PriceUp = 'price_up';
    case Reserved = 'reserved';
    case Sold = 'sold';
}
