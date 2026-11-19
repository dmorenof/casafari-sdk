<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyIncludes extends \Dmorenof\SdkRuntime\DTO
{
    public bool $IncludeBrokers;
    public bool $IncludeHierarchies;
    public bool $IncludeLocales;
    public bool $IncludePhotos;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'IncludeBrokers' => is_bool($value) ? $this->IncludeBrokers = $value : parent::assignMember($name, $value),
            'IncludeHierarchies' => is_bool($value) ? $this->IncludeHierarchies = $value : parent::assignMember($name, $value),
            'IncludeLocales' => is_bool($value) ? $this->IncludeLocales = $value : parent::assignMember($name, $value),
            'IncludePhotos' => is_bool($value) ? $this->IncludePhotos = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
