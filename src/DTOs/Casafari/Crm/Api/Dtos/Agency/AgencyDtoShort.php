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

}
