<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\SearchComparablesRequestV1;

enum FloorsEnum: string
{
    case Ground = 'ground';
    case Middle = 'middle';
    case NoFloor = 'no_floor';
    case Top = 'top';
}
