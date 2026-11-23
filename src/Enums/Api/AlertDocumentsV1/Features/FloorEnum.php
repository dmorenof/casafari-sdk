<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertDocumentsV1\Features;

enum FloorEnum: string
{
    case Ground = 'ground';
    case Middle = 'middle';
    case NoFloor = 'no_floor';
    case Top = 'top';
}
