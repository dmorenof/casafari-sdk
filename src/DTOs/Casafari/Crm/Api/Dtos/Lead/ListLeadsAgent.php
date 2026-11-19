<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsAgent extends \Dmorenof\SdkRuntime\DTO
{
    public string $AgentID;
    public string $AgentName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AgentID' => is_string($value) ? $this->AgentID = $value : parent::assignMember($name, $value),
            'AgentName' => is_string($value) ? $this->AgentName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
