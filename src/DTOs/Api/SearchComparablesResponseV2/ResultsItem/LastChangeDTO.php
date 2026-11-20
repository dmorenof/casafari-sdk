<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchComparablesResponseV2\ResultsItem;

/**
 * Information about the last change of rent price.
 */
final class LastChangeDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'change_date',
    'new_value',
    'old_value',
];

    protected const array VALIDATION = [
    'change_date' => [
        'format' => 'date',
    ],
];

    /**
     * Date of the change.
     * Format: date
     */
    public string $change_date {
        set {
            $this->assigning('change_date', $value);
            $this->change_date = $value;
        }
    }
    /**
     * Value after change.
     */
    public int $new_value;
    /**
     * Value before change.
     */
    public int $old_value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'change_date' => is_string($value) ? $this->change_date = $value : parent::assignMember($name, $value),
            'new_value' => is_int($value) ? $this->new_value = $value : parent::assignMember($name, $value),
            'old_value' => is_int($value) ? $this->old_value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
