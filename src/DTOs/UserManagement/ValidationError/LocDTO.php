<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\ValidationError;

final class LocDTO extends \Dmorenof\SdkRuntime\AnyOf
{
    protected const array TYPES = ['string', 'int'];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'string',
    ],
    [
        'kind' => 'integer',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [];
}
