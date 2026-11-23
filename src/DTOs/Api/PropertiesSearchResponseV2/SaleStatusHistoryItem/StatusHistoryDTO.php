<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchResponseV2\SaleStatusHistoryItem;

final class StatusHistoryDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'date_end',
    'date_start',
    'sale_status_new',
    'sale_status_old',
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
     * New sale status, in the currency of the listings.
     */
    public string $sale_status_new;
    /**
     * Old sale status, in the currency of the listings.
     */
    public string $sale_status_old;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'date_end' => is_string($value) ? $this->date_end = $value : parent::assignMember($name, $value),
            'date_start' => is_string($value) ? $this->date_start = $value : parent::assignMember($name, $value),
            'sale_status_new' => is_string($value) ? $this->sale_status_new = $value : parent::assignMember($name, $value),
            'sale_status_old' => is_string($value) ? $this->sale_status_old = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
