<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem;

enum SaleStatusEnum: string
{
    case Active = 'active';
    case Hold = 'hold';
    case None = 'none';
    case Reserved = 'reserved';
    case Sold = 'sold';
}
