<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyDetailSearchIncludes extends \Dmorenof\SdkRuntime\DTO
{
    public bool $GetAgencyIsShopAsPropertyAgency;
    public bool $IncludeAgency;
    public bool $IncludeBrokers;
    public bool $IncludeFeatures;
    public bool $IncludeFeaturesByCategory;
    public bool $IncludePropertyOccupations;
    public bool $UseHtmlDescription;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'GetAgencyIsShopAsPropertyAgency' => is_bool($value) ? $this->GetAgencyIsShopAsPropertyAgency = $value : parent::assignMember($name, $value),
            'IncludeAgency' => is_bool($value) ? $this->IncludeAgency = $value : parent::assignMember($name, $value),
            'IncludeBrokers' => is_bool($value) ? $this->IncludeBrokers = $value : parent::assignMember($name, $value),
            'IncludeFeatures' => is_bool($value) ? $this->IncludeFeatures = $value : parent::assignMember($name, $value),
            'IncludeFeaturesByCategory' => is_bool($value) ? $this->IncludeFeaturesByCategory = $value : parent::assignMember($name, $value),
            'IncludePropertyOccupations' => is_bool($value) ? $this->IncludePropertyOccupations = $value : parent::assignMember($name, $value),
            'UseHtmlDescription' => is_bool($value) ? $this->UseHtmlDescription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
