<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertsSearchFilterV1;

enum StatusesEnum: string
{
    case Active = 'active';
    case Hold = 'hold';
    case Rented = 'rented';
    case Reserved = 'reserved';
    case Sold = 'sold';
}
