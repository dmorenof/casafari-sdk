<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class DetailsObjects extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'CategoryId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $CategoryId;
    public string $CategoryInnerText;
    public \CasafariSDK\Collections\StringCollection $Name;

}
