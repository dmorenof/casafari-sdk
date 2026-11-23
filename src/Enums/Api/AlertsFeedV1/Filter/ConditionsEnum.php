<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertsFeedV1\Filter;

enum ConditionsEnum: string
{
    case New_ = 'new';
    case Other = 'other';
    case Ruin = 'ruin';
    case Used = 'used';
    case VeryGood = 'very-good';
}
