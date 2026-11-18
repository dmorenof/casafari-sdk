<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class LocationList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'CountryCode' => [
        'enum' => [
            'br',
            'es',
            'fr',
            'it',
            'pa',
            'pt',
        ],
    ],
];

    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\LocationList\CountryCodeEnum $CountryCode;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters\AgenciesIdsCollection $LocationIds;

}
