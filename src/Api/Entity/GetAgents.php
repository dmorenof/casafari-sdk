<?php
declare(strict_types=1);

namespace CasafariSDK\Api\Entity;

final class GetAgents extends \CasafariSDK\ExternalApiVersionSDK
{
    /** POST /api/Entity/GetAgents [operationId: Entity_GetAgents] */
    /**
     * Get Agents
     */
    public static function post(\CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\SystemUserRq $payload): \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity\EntityListRs
    {
        return self::client()->resource(\CasafariSDK\Resources\Api\Entity\GetAgents::class)->post($payload);
    }

}
