<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\AlertsApi;

enum FloorCategoryEnum: string
{
    case Ground = 'ground';
    case Middle = 'middle';
    case NoFloor = 'no_floor';
    case Top = 'top';
}
