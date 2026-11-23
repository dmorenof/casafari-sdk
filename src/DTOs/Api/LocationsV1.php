<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class LocationsV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'locations',
];

    /**
     * List of location objects.
     */
    public \CasafariSDK\Collections\Api\LocationsV1\LocationsCollection $locations;

}
