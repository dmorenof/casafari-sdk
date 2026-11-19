<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class PartnerBanksName extends \Dmorenof\SdkRuntime\DTO
{
    public string $Id;
    public string $Name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Id' => is_string($value) ? $this->Id = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
