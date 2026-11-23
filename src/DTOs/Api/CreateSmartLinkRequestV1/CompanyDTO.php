<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\CreateSmartLinkRequestV1;

final class CompanyDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'name',
];

    protected const array VALIDATION = [
    'logo_url' => [
        'pattern' => '^(?:[a-z0-9.+-]*)://(?:[^\\s:@/]+(?::[^\\s:@/]*)?@)?(?:(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)(?:\\.(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)){3}|\\[[0-9a-f:.]+\\]|([a-z¡-￿0-9](?:[a-z¡-￿0-9-]{0,61}[a-z¡-￿0-9])?(?:\\.(?!-)[a-z¡-￿0-9-]{1,63}(?<!-))*\\.(?!-)(?:[a-z¡-￿-]{2,63}|xn--[a-z0-9]{1,59})(?<!-)\\.?|localhost))(?::[0-9]{1,5})?(?:[/?#][^\\s]*)?\\z',
    ],
];

    /**
     * Format: uri
     */
    public string $logo_url {
        set {
            $this->assigning('logo_url', $value);
            $this->logo_url = $value;
        }
    }
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'logo_url' => is_string($value) ? $this->logo_url = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
