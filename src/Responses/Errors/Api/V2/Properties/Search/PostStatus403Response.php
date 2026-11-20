<?php
declare(strict_types=1);

namespace CasafariSDK\Responses\Errors\Api\V2\Properties\Search;

final class PostStatus403Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the error encountered.
     * Example: "You do not have permission to perform this action."
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
