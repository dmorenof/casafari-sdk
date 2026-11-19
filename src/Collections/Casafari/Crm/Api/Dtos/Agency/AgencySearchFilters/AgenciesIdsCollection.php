<?php
declare(strict_types=1);

namespace CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Agency\AgencySearchFilters;

final class AgenciesIdsCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = 'integer';
    protected const array ITEM_VALIDATION = [
    'format' => 'int32',
];
}
