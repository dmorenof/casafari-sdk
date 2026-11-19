<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class Warning extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Code' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $Code {
        set {
            $this->assigning('Code', $value);
            $this->Code = $value;
        }
    }
    public string $ShortText;

}
