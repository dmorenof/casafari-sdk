<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertyDetailResponseV1\ListingsItem;

/**
 * Information about listing contacts.
 */
final class ContactsInfoDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
    'name',
    'phone',
];

    protected const array VALIDATION = [
    'email' => [
        'format' => 'email',
    ],
];

    /**
     * The email contact.
     * Format: email
     */
    public ?string $email {
        set {
            $this->assigning('email', $value);
            $this->email = $value;
        }
    }
    /**
     * The owner name. Only for FSBO listings.
     */
    public ?string $name;
    /**
     * The phone contact.
     */
    public ?string $phone;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'email' => $value === null || is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'name' => $value === null || is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'phone' => $value === null || is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
