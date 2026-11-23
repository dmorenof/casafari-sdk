<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\Access;

/**
 * AccessResponse
 */
final class Response extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'allowed_locations',
    'company_id',
    'country_ids',
    'user_id',
];

    protected const array VALIDATION = [
    'allowed_locations' => [
        'minItems' => 1,
    ],
    'country_ids' => [
        'minItems' => 1,
    ],
];

    public \CasafariSDK\Collections\IntegerCollection $allowed_locations {
        set {
            $this->assigning('allowed_locations', $value);
            $this->allowed_locations = $value;
        }
    }
    public string $company_id;
    public \CasafariSDK\Collections\IntegerCollection $country_ids {
        set {
            $this->assigning('country_ids', $value);
            $this->country_ids = $value;
        }
    }
    public int $user_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allowed_locations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->allowed_locations = new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'company_id' => is_string($value) ? $this->company_id = $value : parent::assignMember($name, $value),
            'country_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->country_ids = new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'user_id' => is_int($value) ? $this->user_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
