<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class EntitiesLocaleDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'CultureID' => [
        'format' => 'int32',
    ],
    'EntityID' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $CultureID;
    public string $Description;
    public string $DescriptionLuxury;
    /**
     * Format: int32
     */
    public int $EntityID;
    public string $ShortDescription;
    public string $Title;

}
