<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyListSorts extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'SortBy' => [
        'enum' => [
            'NameAsc',
            'NameDesc',
        ],
    ],
];

    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Agency\AgencyListSorts\SortByEnum $SortBy;

}
