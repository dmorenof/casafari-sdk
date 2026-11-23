<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class TypesV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'types',
    'types_with_countries',
];

    /**
     * List of grouped property types.
     */
    public \CasafariSDK\Collections\Api\TypesV1\TypesCollection $types;
    /**
     * List of type names with countries where each type is available.
     */
    public \CasafariSDK\Collections\Api\TypesV1\WithCountriesCollection $types_with_countries;

}
