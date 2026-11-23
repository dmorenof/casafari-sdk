<?php

declare(strict_types=1);

namespace CasafariSDK\Enums\Api\V1\ListingAlerts\Feeds\ById\Get\Query;

enum OrderByEnum: string
{
    case AlertDate = '-alert_date';
    case AlertId = '-alert_id';
    case CreatedAt = '-created_at';
    case UpdatedAt = '-updated_at';
    case AlertDate2 = 'alert_date';
    case AlertId2 = 'alert_id';
    case CreatedAt2 = 'created_at';
    case UpdatedAt2 = 'updated_at';
}
