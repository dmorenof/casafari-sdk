<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class EntitySearchIncludes extends \Dmorenof\SdkRuntime\DTO
{
    public bool $IncludeAgencies;
    public bool $IncludeAgenciesLocales;
    public bool $IncludeEntityFiles;
    public bool $IncludeLocales;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'IncludeAgencies' => is_bool($value) ? $this->IncludeAgencies = $value : parent::assignMember($name, $value),
            'IncludeAgenciesLocales' => is_bool($value) ? $this->IncludeAgenciesLocales = $value : parent::assignMember($name, $value),
            'IncludeEntityFiles' => is_bool($value) ? $this->IncludeEntityFiles = $value : parent::assignMember($name, $value),
            'IncludeLocales' => is_bool($value) ? $this->IncludeLocales = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
