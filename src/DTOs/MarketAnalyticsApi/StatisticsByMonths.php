<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\MarketAnalyticsApi;

/**
 * StatisticsByMonths
 */
final class StatisticsByMonths extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'for_the_last_12_month',
    'for_the_last_1_month',
    'for_the_last_3_month',
    'for_the_last_6_month',
    'for_the_last_9_month',
];

    public int $for_the_last_12_month;
    public int $for_the_last_1_month;
    public int $for_the_last_3_month;
    public int $for_the_last_6_month;
    public int $for_the_last_9_month;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'for_the_last_12_month' => is_int($value) ? $this->for_the_last_12_month = $value : parent::assignMember($name, $value),
            'for_the_last_1_month' => is_int($value) ? $this->for_the_last_1_month = $value : parent::assignMember($name, $value),
            'for_the_last_3_month' => is_int($value) ? $this->for_the_last_3_month = $value : parent::assignMember($name, $value),
            'for_the_last_6_month' => is_int($value) ? $this->for_the_last_6_month = $value : parent::assignMember($name, $value),
            'for_the_last_9_month' => is_int($value) ? $this->for_the_last_9_month = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
