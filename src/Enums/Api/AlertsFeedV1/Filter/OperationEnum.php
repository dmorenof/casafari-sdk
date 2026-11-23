<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertsFeedV1\Filter;

enum OperationEnum: string
{
    case Rent = 'rent';
    case Sale = 'sale';
}
