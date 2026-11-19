<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Leads;

final class ListResource extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Leads/List [operationId: Leads_List] */
    /**
     * Get Sales/Listings
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\GetLeadRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\ListLeadsRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Leads\ListResource::class)->post($payload);
    }

}
