<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Location (CASAFARI)
 */
final class LocationHierarchyElement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
    'level' => [
        'format' => 'int32',
    ],
    'parent_id' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $id;
    /**
     * Format: int32
     */
    public int $level;
    public string $name;
    /**
     * Format: int32
     */
    public int $parent_id;

}
