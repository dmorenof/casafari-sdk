<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyButtons extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public string $backgroundColor;
    public string $foregroundColor;
    /**
     * Format: int32
     */
    public int $id;
    public string $text;

}
