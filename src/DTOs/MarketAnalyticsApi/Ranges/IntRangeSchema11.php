<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi\Ranges;

/**
 * IntRangeSchema
 */
final class IntRangeSchema11 extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'max' => [
        'minimum' => 0.0,
        'maximum' => 15000.0,
    ],
    'min' => [
        'minimum' => 0.0,
        'maximum' => 15000.0,
    ],
];

    public ?int $max {
        set {
            $this->assigning('max', $value);
            $this->max = $value;
        }
    }
    public ?int $min {
        set {
            $this->assigning('min', $value);
            $this->min = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'max' => $value === null || is_int($value) ? $this->max = $value : parent::assignMember($name, $value),
            'min' => $value === null || is_int($value) ? $this->min = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
