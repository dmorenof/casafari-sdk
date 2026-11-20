<?php
declare(strict_types=1);

namespace CasafariSDK\Responses\Errors\Api\V1\ListingAlerts\Feeds;

final class PostStatus401Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the error encountered.
     * Example: "Authentication credentials were not provided."
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
