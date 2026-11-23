<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\Access\Request;

final class HeadersValueDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', \CasafariSDK\Collections\StringCollection::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'string',
    ],
    [
        'kind' => 'array',
        'items' => [
            'kind' => 'string',
        ],
    ],
];
    protected const array SCHEMA_DEFINITIONS = [];
}
