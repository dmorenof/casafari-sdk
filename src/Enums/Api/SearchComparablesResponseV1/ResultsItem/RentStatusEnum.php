<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem;

enum RentStatusEnum: string
{
    case Active = 'active';
    case Hold = 'hold';
    case None = 'none';
    case Rented = 'rented';
    case Reserved = 'reserved';
}
