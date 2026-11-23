<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class CreateSmartLinkRequestV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'primary_listing_ids',
    'settings',
    'user',
];

    protected const array VALIDATION = [
    'primary_listing_ids' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
];

    public \CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1\CompanyDTO $company;
    /**
     * List of primary listing ids to include in the smart link.
     */
    public \CasafariSDK\Collections\IntegerCollection $primary_listing_ids {
        set {
            $this->assigning('primary_listing_ids', $value);
            $this->primary_listing_ids = $value;
        }
    }
    public \CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1\SettingsDTO $settings;
    public \CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1\UserDTO $user;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'primary_listing_ids' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->primary_listing_ids = new \CasafariSDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
