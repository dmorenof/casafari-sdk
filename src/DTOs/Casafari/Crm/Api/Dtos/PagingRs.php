<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos;

final class PagingRs extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'CurrentPage' => [
        'format' => 'int32',
    ],
    'NextPage' => [
        'format' => 'int32',
    ],
    'PreviousPage' => [
        'format' => 'int32',
    ],
    'ResultsPerPage' => [
        'format' => 'int32',
    ],
    'TotalPages' => [
        'format' => 'int32',
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'PagingItems',
];

    /**
     * Format: int32
     */
    public int $CurrentPage {
        set {
            $this->assigning('CurrentPage', $value);
            $this->CurrentPage = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $NextPage {
        set {
            $this->assigning('NextPage', $value);
            $this->NextPage = $value;
        }
    }
    public \CasafariSDK\Collections\StringCollection $PagingItems;
    /**
     * Format: int32
     */
    public int $PreviousPage {
        set {
            $this->assigning('PreviousPage', $value);
            $this->PreviousPage = $value;
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
    /**
     * Format: int32
     */
    public int $TotalPages {
        set {
            $this->assigning('TotalPages', $value);
            $this->TotalPages = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'CurrentPage' => is_int($value) ? $this->CurrentPage = $value : parent::assignMember($name, $value),
            'NextPage' => is_int($value) ? $this->NextPage = $value : parent::assignMember($name, $value),
            'PagingItems' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->PagingItems = new \CasafariSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'PreviousPage' => is_int($value) ? $this->PreviousPage = $value : parent::assignMember($name, $value),
            'ResultsPerPage' => is_int($value) ? $this->ResultsPerPage = $value : parent::assignMember($name, $value),
            'TotalPages' => is_int($value) ? $this->TotalPages = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
