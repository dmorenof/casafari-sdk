<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\ComparablesPricesRequestV1;

enum OperationEnum: string
{
    case Rent = 'rent';
    case Sale = 'sale';
}
