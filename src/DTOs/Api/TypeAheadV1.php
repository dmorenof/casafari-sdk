<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class TypeAheadV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'typeahead',
];

    /**
     * The typeahead suggestions.
     */
    public \CasafariSDK\Collections\Api\TypeAheadV1\TypeaheadCollection $typeahead;

}
