<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertyDetailResponseV1\SaleTimeOnMarket;

/**
 * Information about the property last activity on the sales market.
 */
final class OnMarketDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'date_end',
    'date_start',
    'days_on_market',
    'has_untracked_period',
];

    protected const array VALIDATION = [
    'date_end' => [
        'format' => 'date',
    ],
    'date_start' => [
        'format' => 'date',
    ],
];

    /**
     * End date of activity on the market.
     * Format: date
     */
    public ?string $date_end {
        set {
            $this->assigning('date_end', $value);
            $this->date_end = $value;
        }
    }
    /**
     * Start date of activity on the market.
     * Format: date
     */
    public string $date_start {
        set {
            $this->assigning('date_start', $value);
            $this->date_start = $value;
        }
    }
    /**
     * Number of days property was / is on the market.
     */
    public int $days_on_market;
    /**
     * Whether the property was already on the market when it started being tracked.
     */
    public bool $has_untracked_period;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date_end' => $value === null || is_string($value) ? $this->date_end = $value : parent::assignMember($name, $value),
            'date_start' => is_string($value) ? $this->date_start = $value : parent::assignMember($name, $value),
            'days_on_market' => is_int($value) ? $this->days_on_market = $value : parent::assignMember($name, $value),
            'has_untracked_period' => is_bool($value) ? $this->has_untracked_period = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
