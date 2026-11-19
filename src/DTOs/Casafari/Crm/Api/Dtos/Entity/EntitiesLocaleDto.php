<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class EntitiesLocaleDto extends \Dmorenof\SdkRuntime\DTO
{
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
    public int $CultureID {
        set {
            $this->assigning('CultureID', $value);
            $this->CultureID = $value;
        }
    }
    public string $Description;
    public string $DescriptionLuxury;
    /**
     * Format: int32
     */
    public int $EntityID {
        set {
            $this->assigning('EntityID', $value);
            $this->EntityID = $value;
        }
    }
    public string $ShortDescription;
    public string $Title;

}
