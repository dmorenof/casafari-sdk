<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Photos
 */
final class PropertyPhotos extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'SortOrder' => [
        'format' => 'int32',
    ],
];

    public string $Category;
    public string $Description;
    /**
     * Format: int32
     */
    public int $SortOrder {
        set {
            $this->assigning('SortOrder', $value);
            $this->SortOrder = $value;
        }
    }
    public string $Url;

}
