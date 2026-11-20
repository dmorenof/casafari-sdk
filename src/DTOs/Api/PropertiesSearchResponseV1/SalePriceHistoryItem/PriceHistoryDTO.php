<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchResponseV1\SalePriceHistoryItem;

final class PriceHistoryDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'date_end',
    'date_start',
    'sale_price_new',
    'sale_price_old',
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
     * End date when the change was applied.
     * Format: date
     */
    public string $date_end {
        set {
            $this->assigning('date_end', $value);
            $this->date_end = $value;
        }
    }
    /**
     * Start date when the change was applied.
     * Format: date
     */
    public string $date_start {
        set {
            $this->assigning('date_start', $value);
            $this->date_start = $value;
        }
    }
    /**
     * New sale price, in the currency of the listings.
     */
    public int $sale_price_new;
    /**
     * Old sale price, in the currency of the listings.
     */
    public int $sale_price_old;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date_end' => is_string($value) ? $this->date_end = $value : parent::assignMember($name, $value),
            'date_start' => is_string($value) ? $this->date_start = $value : parent::assignMember($name, $value),
            'sale_price_new' => is_int($value) ? $this->sale_price_new = $value : parent::assignMember($name, $value),
            'sale_price_old' => is_int($value) ? $this->sale_price_old = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
