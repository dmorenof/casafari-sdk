<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\UserManagement\Access;

/**
 * AccessRequest
 */
final class Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'endpoint_name',
    'headers',
    'method',
    'params',
    'query',
    'service_name',
    'url',
];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
        'maxLength' => 2083,
        'format' => 'uri',
    ],
];

    public string $endpoint_name;
    /**
     * Request header type.
     */
    public \CasafariSDK\DTOs\UserManagement\Access\Request\HeadersMap $headers;
    public \CasafariSDK\Enums\UserManagement\HTTPMethod $method;
    public ?\CasafariSDK\DTOs\UserManagement\Access\Request\ParamsMap $params;
    public ?\CasafariSDK\DTOs\UserManagement\Access\Request\QueryMap $query;
    public \CasafariSDK\Enums\UserManagement\ServiceEnum $service_name;
    /**
     * Format: uri
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'endpoint_name' => is_string($value) ? $this->endpoint_name = $value : parent::assignMember($name, $value),
            'method' => is_string($value) ? $this->method = \CasafariSDK\Enums\UserManagement\HTTPMethod::from($value) : parent::assignMember($name, $value),
            'service_name' => is_string($value) ? $this->service_name = \CasafariSDK\Enums\UserManagement\ServiceEnum::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
