<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\AlertDocumentsV1;

enum RentPeriodEnum: string
{
    case Day = 'day';
    case Fortnight = 'fortnight';
    case Month = 'month';
    case None = 'none';
    case Week = 'week';
    case Year = 'year';
}
