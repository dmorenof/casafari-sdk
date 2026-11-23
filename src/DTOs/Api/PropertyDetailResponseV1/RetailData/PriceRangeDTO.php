<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertyDetailResponseV1\RetailData;

/**
 * Price range if the property is available for transfer.
 */
final class PriceRangeDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'gte',
    'lte',
];

    /**
     * Lower bound of the transfer price range.
     */
    public ?int $gte;
    /**
     * Upper bound of the transfer price range.
     */
    public ?int $lte;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gte' => $value === null || is_int($value) ? $this->gte = $value : parent::assignMember($name, $value),
            'lte' => $value === null || is_int($value) ? $this->lte = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
