<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1;

final class UserDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'email',
    'first_name',
    'last_name',
    'phone',
];

    protected const array VALIDATION = [
    'photo_url' => [
        'pattern' => '^(?:[a-z0-9.+-]*)://(?:[^\\s:@/]+(?::[^\\s:@/]*)?@)?(?:(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)(?:\\.(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)){3}|\\[[0-9a-f:.]+\\]|([a-z¡-￿0-9](?:[a-z¡-￿0-9-]{0,61}[a-z¡-￿0-9])?(?:\\.(?!-)[a-z¡-￿0-9-]{1,63}(?<!-))*\\.(?!-)(?:[a-z¡-￿-]{2,63}|xn--[a-z0-9]{1,59})(?<!-)\\.?|localhost))(?::[0-9]{1,5})?(?:[/?#][^\\s]*)?\\z',
    ],
];

    public string $about_me;
    /**
     * Format: email
     */
    public string $email;
    public string $first_name;
    public string $last_name;
    public string $phone;
    /**
     * Format: uri
     */
    public string $photo_url {
        set {
            $this->assigning('photo_url', $value);
            $this->photo_url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'about_me' => is_string($value) ? $this->about_me = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'first_name' => is_string($value) ? $this->first_name = $value : parent::assignMember($name, $value),
            'last_name' => is_string($value) ? $this->last_name = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'photo_url' => is_string($value) ? $this->photo_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
