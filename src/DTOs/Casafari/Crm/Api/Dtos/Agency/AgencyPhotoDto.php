<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyPhotoDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'AgencyPhotoID' => [
        'format' => 'int32',
    ],
    'Sortorder' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $AgencyID {
        set {
            $this->assigning('AgencyID', $value);
            $this->AgencyID = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $AgencyPhotoID {
        set {
            $this->assigning('AgencyPhotoID', $value);
            $this->AgencyPhotoID = $value;
        }
    }
    public string $Path;
    /**
     * Format: int32
     */
    public int $Sortorder {
        set {
            $this->assigning('Sortorder', $value);
            $this->Sortorder = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AgencyID' => is_int($value) ? $this->AgencyID = $value : parent::assignMember($name, $value),
            'AgencyPhotoID' => is_int($value) ? $this->AgencyPhotoID = $value : parent::assignMember($name, $value),
            'Path' => is_string($value) ? $this->Path = $value : parent::assignMember($name, $value),
            'Sortorder' => is_int($value) ? $this->Sortorder = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
