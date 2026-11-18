<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Files
 */
final class PropertyFiles extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'SortOrder' => [
        'format' => 'int32',
    ],
];

    public string $Category;
    public string $Filename;
    /**
     * Format: int32
     */
    public int $SortOrder;

}
