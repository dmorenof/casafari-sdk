<?php
declare(strict_types=1);

namespace CasafariSDK\Enums\Api\SearchComparablesRequestV1;

enum ViewEnum: string
{
    case City = 'city';
    case Golf = 'golf';
    case Landscape = 'landscape';
    case Park = 'park';
    case Water = 'water';
}
