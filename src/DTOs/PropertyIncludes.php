<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

class PropertyIncludes extends DTO
{
    public bool $IncludeFeatures;
    public bool $IncludeBrokers;
    public bool $IncludeAgency;
    public bool $UseHtmlDescription;
    public bool $IncludeFeaturesByCategory;
    public bool $GetAgencyIsShopAsPropertyAgency;
    public bool $IncludePropertyOccupations;
}