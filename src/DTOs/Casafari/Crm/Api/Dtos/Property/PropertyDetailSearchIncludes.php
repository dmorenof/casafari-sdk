<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyDetailSearchIncludes extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    public bool $GetAgencyIsShopAsPropertyAgency;
    public bool $IncludeAgency;
    public bool $IncludeBrokers;
    public bool $IncludeFeatures;
    public bool $IncludeFeaturesByCategory;
    public bool $IncludePropertyOccupations;
    public bool $UseHtmlDescription;

}
