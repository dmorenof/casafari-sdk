<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertsFeedV1\Filter;

enum DirectionEnum: string
{
    case East = 'east';
    case North = 'north';
    case South = 'south';
    case West = 'west';
}
