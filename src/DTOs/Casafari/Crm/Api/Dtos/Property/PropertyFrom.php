<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class PropertyFrom extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Date' => [
        'format' => 'date-time',
    ],
];

    /**
     * Format: date-time
     */
    public string $Date;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Property\PropertyFrom\TypeEnum $Type;

}
