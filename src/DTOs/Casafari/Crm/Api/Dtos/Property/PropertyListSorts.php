<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyListSorts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'SortBy' => [
        'enum' => [
            'DateAsc',
            'DateDesc',
            'LastChangeDate',
            'ModifiedDateAsc',
            'ModifiedDateDesc',
            'PriceAsc',
            'PriceDesc',
            'PropertyExclusiveAndOnFocusAsc',
            'PropertyExclusiveAndOnFocusDesc',
            'PropertyExclusiveAsc',
            'PropertyExclusiveDesc',
            'PropertyIdAsc',
            'PropertyIdDesc',
        ],
    ],
];

    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\PropertyListSorts\SortByEnum $SortBy;

}
