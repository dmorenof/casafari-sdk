<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class AlertsFeedV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'filter',
    'name',
];

    protected const array VALIDATION = [
    'name' => [
        'maxLength' => 200,
    ],
];

    protected const array READ_ONLY_FIELDS = [
    'id',
    'user',
];

    /**
     * Set of clauses to filter alerts.
     */
    public \CasafariSDK\DTOs\Api\AlertsFeedV1\FilterDTO $filter;
    public int $id;
    /**
     * Name of the feed.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * Format: email
     */
    public string $user;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'user' => is_string($value) ? $this->user = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
