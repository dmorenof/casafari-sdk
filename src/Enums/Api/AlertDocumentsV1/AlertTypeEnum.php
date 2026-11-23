<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertDocumentsV1;

enum AlertTypeEnum: string
{
    case New_ = 'new';
    case RentPrice = 'rent_price';
    case RentStatus = 'rent_status';
    case SalePrice = 'sale_price';
    case SaleStatus = 'sale_status';
}
