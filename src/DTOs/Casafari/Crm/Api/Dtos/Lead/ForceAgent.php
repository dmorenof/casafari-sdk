<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ForceAgent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgentId' => [
        'format' => 'int32',
    ],
];

    public string $AgentEmail;
    /**
     * Format: int32
     */
    public int $AgentId {
        set {
            $this->assigning('AgentId', $value);
            $this->AgentId = $value;
        }
    }

}
