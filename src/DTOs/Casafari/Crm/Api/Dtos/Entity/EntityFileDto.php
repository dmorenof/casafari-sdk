<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class EntityFileDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'EntityFileID' => [
        'format' => 'int32',
    ],
    'EntityID' => [
        'format' => 'int32',
    ],
    'SortOrder' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $EntityFileID;
    /**
     * Format: int32
     */
    public int $EntityID;
    public string $Filename;
    /**
     * Format: int32
     */
    public int $SortOrder;
    public bool $isPhoto;

}
