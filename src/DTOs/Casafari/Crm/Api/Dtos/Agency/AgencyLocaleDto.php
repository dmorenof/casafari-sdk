<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyLocaleDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'AgencyID' => [
        'format' => 'int32',
    ],
    'CultureID' => [
        'format' => 'int32',
    ],
];

    public string $AgencyDescription;
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
    public int $CultureID {
        set {
            $this->assigning('CultureID', $value);
            $this->CultureID = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AgencyDescription' => is_string($value) ? $this->AgencyDescription = $value : parent::assignMember($name, $value),
            'AgencyID' => is_int($value) ? $this->AgencyID = $value : parent::assignMember($name, $value),
            'CultureID' => is_int($value) ? $this->CultureID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
