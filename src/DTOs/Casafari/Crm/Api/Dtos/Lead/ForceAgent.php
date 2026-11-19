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

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AgentEmail' => is_string($value) ? $this->AgentEmail = $value : parent::assignMember($name, $value),
            'AgentId' => is_int($value) ? $this->AgentId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
