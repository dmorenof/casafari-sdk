<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class CreateSmartLinkResponseV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
    'url',
];

    public string $id;
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
