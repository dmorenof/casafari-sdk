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
    public int $EntityFileID {
        set {
            $this->assigning('EntityFileID', $value);
            $this->EntityFileID = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $EntityID {
        set {
            $this->assigning('EntityID', $value);
            $this->EntityID = $value;
        }
    }
    public string $Filename;
    /**
     * Format: int32
     */
    public int $SortOrder {
        set {
            $this->assigning('SortOrder', $value);
            $this->SortOrder = $value;
        }
    }
    public bool $isPhoto;

}
