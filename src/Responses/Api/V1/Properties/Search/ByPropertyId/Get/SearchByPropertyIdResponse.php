<?php
declare(strict_types=1);

namespace CasafariSDK\Responses\Api\V1\Properties\Search\ByPropertyId\Get;

final class SearchByPropertyIdResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'next' => [
        'format' => 'uri',
    ],
    'previous' => [
        'format' => 'uri',
    ],
];

    /**
     * Example: 123
     */
    public int $count;
    /**
     * Example: "http://api.example.org/accounts/?offset=400&limit=100"
     * Format: uri
     */
    public ?string $next {
        set {
            $this->assigning('next', $value);
            $this->next = $value;
        }
    }
    /**
     * Example: "http://api.example.org/accounts/?offset=200&limit=100"
     * Format: uri
     */
    public ?string $previous {
        set {
            $this->assigning('previous', $value);
            $this->previous = $value;
        }
    }
    public \CasafariSDK\DTOs\Api\PropertyDetailResponseV1 $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'count' => is_int($value) ? $this->count = $value : parent::assignMember($name, $value),
            'next' => $value === null || is_string($value) ? $this->next = $value : parent::assignMember($name, $value),
            'previous' => $value === null || is_string($value) ? $this->previous = $value : parent::assignMember($name, $value),
            'results' => $value instanceof \stdClass ? $this->results = new \CasafariSDK\DTOs\Api\PropertyDetailResponseV1($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
