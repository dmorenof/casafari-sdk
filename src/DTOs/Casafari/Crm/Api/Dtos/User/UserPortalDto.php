<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\User;

final class UserPortalDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'MaxProperties' => [
        'format' => 'int32',
    ],
    'PortalID' => [
        'format' => 'int32',
    ],
    'UserID' => [
        'format' => 'int32',
    ],
];

    public bool $ManagerOnly;
    /**
     * Format: int32
     */
    public int $MaxProperties {
        set {
            $this->assigning('MaxProperties', $value);
            $this->MaxProperties = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $PortalID {
        set {
            $this->assigning('PortalID', $value);
            $this->PortalID = $value;
        }
    }
    public string $PortalLogo;
    /**
     * Format: int32
     */
    public int $UserID {
        set {
            $this->assigning('UserID', $value);
            $this->UserID = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'ManagerOnly' => is_bool($value) ? $this->ManagerOnly = $value : parent::assignMember($name, $value),
            'MaxProperties' => is_int($value) ? $this->MaxProperties = $value : parent::assignMember($name, $value),
            'PortalID' => is_int($value) ? $this->PortalID = $value : parent::assignMember($name, $value),
            'PortalLogo' => is_string($value) ? $this->PortalLogo = $value : parent::assignMember($name, $value),
            'UserID' => is_int($value) ? $this->UserID = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
