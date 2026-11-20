<?php
declare(strict_types=1);

namespace CasafariSDK\Responses\Api\V1\ListingAlerts\Feeds\ById;

final class Delete extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Boolean indicating whether the delete action was successful.
     * Example: true
     */
    public bool $success;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'success' => is_bool($value) ? $this->success = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
