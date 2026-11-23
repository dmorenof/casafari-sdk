<?php
declare(strict_types=1);

namespace CasafariSDK\Responses\Errors\Api\V1\ListingAlerts\Feeds\ById\Update;

final class PutStatus404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Not found.
     * Example: "Not found."
     */
    public string $detail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'detail' => is_string($value) ? $this->detail = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
