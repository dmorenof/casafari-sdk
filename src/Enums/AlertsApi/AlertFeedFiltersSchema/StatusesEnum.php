<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\AlertsApi\AlertFeedFiltersSchema;

enum StatusesEnum: string
{
    case Active = 'active';
    case Hold = 'hold';
    case None = 'none';
    case Reserved = 'reserved';
    case Sold = 'sold';
    case Rented = 'rented';
}
