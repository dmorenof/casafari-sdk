<?php

declare(strict_types=1);

namespace CasafariSDK\Responses\Api\V1\ListingAlerts\Feeds\ById\Get;

final class FeedsByIdResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Example: 123
     */
    public int $count;
    /**
     * Example: "http://api.example.org/accounts/?offset=400&limit=100"
     * Format: uri
     */
    public ?string $next;
    /**
     * Example: "http://api.example.org/accounts/?offset=200&limit=100"
     * Format: uri
     */
    public ?string $previous;
    public \CasafariSDK\DTOs\Api\AlertDocumentsV1 $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'next' => $value === null || is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'previous' => $value === null || is_string($value) ? $this->previous = $value : parent::assignMember($name, $value),
            'results' => $value instanceof \stdClass ? $this->results = new \CasafariSDK\DTOs\Api\AlertDocumentsV1($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
