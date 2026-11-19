<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class PagingRq extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'Current' => [
        'format' => 'int32',
    ],
    'ResultsPerPage' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $Current {
        set {
            $this->assigning('Current', $value);
            $this->Current = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $ResultsPerPage {
        set {
            $this->assigning('ResultsPerPage', $value);
            $this->ResultsPerPage = $value;
        }
    }

}
