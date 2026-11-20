<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\ListingAlerts\Feeds\ById;

final class Update extends \CasafariSDK\Client
{
    private const array PUT = [
        'method' => 'PUT',
        'path' => '/api/v1/listing-alerts/feeds/{id}/update',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Update\\PutStatus401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Update\\PutStatus403Response',
            404 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Update\\PutStatus404Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Update\\PutStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Update\\PutStatus403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Update\\PutStatus404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\Api\\AlertsFeedV1',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\AlertsFeedV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Update feed (v1)
     *
     * Update alerts feed by id.
     */
    public function put(string $id, ?\CasafariSDK\DTOs\Api\AlertsFeedV1 $payload = null): \CasafariSDK\DTOs\Api\AlertsFeedV1
    {
        /** @var \CasafariSDK\DTOs\Api\AlertsFeedV1 $result */
        $result = func_num_args() > 1 ? $this->executeBody(self::operation(self::PUT), $payload, path: ['id' => $id]) : $this->executeArguments(self::operation(self::PUT), path: ['id' => $id]);
        return $result;
    }

}
