<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\TypedArrays\LocaleListsArray;
use CasafariSDK\TypedArrays\StringsArray;

class PropertyList extends Property
{
    public int $id;
    public string $businessTypeLocale;
    public string $typeLocale;
    public string $conditionTypeLocale;
    public bool $OnFocus;
    public bool $Opportunity;
    public bool $Featured;
    public string $building_id;
    public string $priceprefixhelper;
    public string $typology;
    public StringsArray $features_list_enum;
    public DetailsObject $features_list_categorized;
    public string $ami;
    public LocaleListsArray $locales;
}