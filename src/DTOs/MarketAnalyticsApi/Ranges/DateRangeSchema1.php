<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\Ranges;

/**
 * DateRangeSchema
 */
final class DateRangeSchema1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'min',
];

    protected const array VALIDATION = [
    'max' => [
        'format' => 'date',
    ],
    'min' => [
        'format' => 'date',
    ],
];

    /**
     * End date in the format `YYYY-MM-DD`.
     * Format: date
     */
    public ?string $max {
        set {
            $this->assigning('max', $value);
            $this->max = $value;
        }
    }
    /**
     * Start date in the format `YYYY-MM-DD`.
     * Format: date
     */
    public ?string $min {
        set {
            $this->assigning('min', $value);
            $this->min = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'max' => $value === null || is_string($value) ? $this->max = $value : parent::assignMember($name, $value),
            'min' => $value === null || is_string($value) ? $this->min = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
