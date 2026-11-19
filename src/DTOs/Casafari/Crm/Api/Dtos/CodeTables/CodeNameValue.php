<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CodeTables;

/**
 * Represents a model for code, name, and value pairs.
 */
final class CodeNameValue extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'CultureId' => [
        'format' => 'int32',
    ],
    'Id' => [
        'format' => 'int32',
    ],
];

    public string $City;
    /**
     * Gets or sets the culture associated with the value.
     * Format: int32
     */
    public int $CultureId {
        set {
            $this->assigning('CultureId', $value);
            $this->CultureId = $value;
        }
    }
    /**
     * Gets or sets the unique identifier associated with the value.
     * Format: int32
     */
    public int $Id {
        set {
            $this->assigning('Id', $value);
            $this->Id = $value;
        }
    }
    /**
     * Gets or sets the name associated with the value.
     */
    public string $Name;
    public string $Zone;

}
