<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class EntityListSorts extends \Dmorenof\SdkRuntime\DTO
{
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Entity\EntityListSorts\SortByEnum $SortBy;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'SortBy' => is_string($value) ? $this->SortBy = \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Entity\EntityListSorts\SortByEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
