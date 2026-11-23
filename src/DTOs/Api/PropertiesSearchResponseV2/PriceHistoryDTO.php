<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchResponseV2;

final class PriceHistoryDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'date_end',
    'date_start',
    'rent_price_new',
    'rent_price_old',
];

    /**
     * End date when the change was applied.
     * Format: date
     */
    public string $date_end;
    /**
     * Start date when the change was applied.
     * Format: date
     */
    public string $date_start;
    /**
     * New rent price, in the currency of the listings.
     */
    public int $rent_price_new;
    /**
     * Old rent price, in the currency of the listings.
     */
    public int $rent_price_old;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date_end' => is_string($value) ? $this->date_end = $value : parent::assignMember($name, $value),
            'date_start' => is_string($value) ? $this->date_start = $value : parent::assignMember($name, $value),
            'rent_price_new' => is_int($value) ? $this->rent_price_new = $value : parent::assignMember($name, $value),
            'rent_price_old' => is_int($value) ? $this->rent_price_old = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
