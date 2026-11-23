<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertsFeedV1\Filter;

enum StatusesEnum: string
{
    case Active = 'active';
    case Hold = 'hold';
    case Rented = 'rented';
    case Reserved = 'reserved';
    case Sold = 'sold';
}
