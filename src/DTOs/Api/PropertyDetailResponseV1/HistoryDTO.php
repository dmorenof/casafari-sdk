<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertyDetailResponseV1;

final class HistoryDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'changed_at',
    'rent_currency',
    'rent_price',
    'sale_currency',
    'sale_price',
];

    protected const array VALIDATION = [
    'changed_at' => [
        'format' => 'date',
    ],
];

    /**
     * Date when the estate was last updated.
     * Format: date
     */
    public string $changed_at {
        set {
            $this->assigning('changed_at', $value);
            $this->changed_at = $value;
        }
    }
    /**
     * Rent price currency code.
     */
    public string $rent_currency;
    /**
     * Rent price, in the currency of the listings (specified by the `rent_currency` field).
     */
    public int $rent_price;
    /**
     * Sale price currency code.
     */
    public string $sale_currency;
    /**
     * Sale price, in the currency of the listings (specified by the `sale_currency` field).
     */
    public int $sale_price;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'changed_at' => is_string($value) ? $this->changed_at = $value : parent::assignMember($name, $value),
            'rent_currency' => is_string($value) ? $this->rent_currency = $value : parent::assignMember($name, $value),
            'rent_price' => is_int($value) ? $this->rent_price = $value : parent::assignMember($name, $value),
            'sale_currency' => is_string($value) ? $this->sale_currency = $value : parent::assignMember($name, $value),
            'sale_price' => is_int($value) ? $this->sale_price = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
