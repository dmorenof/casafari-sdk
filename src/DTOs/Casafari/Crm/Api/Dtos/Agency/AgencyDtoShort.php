<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyDtoShort extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'ParentID' => [
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
    public string $AgencyName;
    public string $LogoPath;
    /**
     * Format: int32
     */
    public int $ParentID {
        set {
            $this->assigning('ParentID', $value);
            $this->ParentID = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AgencyID' => is_int($value) ? $this->AgencyID = $value : parent::assignMember($name, $value),
            'AgencyName' => is_string($value) ? $this->AgencyName = $value : parent::assignMember($name, $value),
            'LogoPath' => is_string($value) ? $this->LogoPath = $value : parent::assignMember($name, $value),
            'ParentID' => is_int($value) ? $this->ParentID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
