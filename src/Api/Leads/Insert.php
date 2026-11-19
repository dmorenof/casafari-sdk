<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Leads;

final class Insert extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Leads/Insert [operationId: Leads_Insert] */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadtRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Leads\Insert::class)->post($payload);
    }

}
