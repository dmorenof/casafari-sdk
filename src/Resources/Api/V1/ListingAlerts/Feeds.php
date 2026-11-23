<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\ListingAlerts;

final class Feeds extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/api/v1/listing-alerts/feeds',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\ListingAlerts\\Feeds\\Get\\ListingAlertsFeedsCollection',
    ];

    /**
     * Get feeds list (v1)
     *
     * Returns all alerts feeds for currently authenticated user.
     */
    public function get(?\CasafariSDK\GetParams\Api\V1\ListingAlerts\Feeds $params = null): \CasafariSDK\Collections\Api\V1\ListingAlerts\Feeds\Get\ListingAlertsFeedsCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\ListingAlerts\Feeds\Get\ListingAlertsFeedsCollection $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/listing-alerts/feeds',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'success' => [
            201,
        ],
        'errors' => [
            400 => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
            401 => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
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
     * Create feed (v1)
     *
     * Create alerts feed for currently authenticated user.<br/>
     *     Feed is a predefined set of conditions to filter alerts by.<br/>
     *     The `id` of created feed then should be used as URL parameter for
     *     [get alerts by feed](/#operation/getAlertsFeed) endpoint
     *     to get alerts filtered by feed filter conditions.
     */
    public function post(?\CasafariSDK\DTOs\Api\AlertsFeedV1 $payload = null): \CasafariSDK\DTOs\Api\AlertsFeedV1
    {
        /** @var \CasafariSDK\DTOs\Api\AlertsFeedV1 $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array DELETE_BY_ID = [
        'method' => 'DELETE',
        'path' => '/api/v1/listing-alerts/feeds/{id}',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            401 => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
            404 => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Responses\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Delete',
    ];

    /**
     * Delete feed (v1)
     *
     * Delete alerts feed (by feed ID) for currently authenticated user.
     */
    public function deleteById(string $id): \CasafariSDK\Responses\Api\V1\ListingAlerts\Feeds\ById\Delete
    {
        /** @var \CasafariSDK\Responses\Api\V1\ListingAlerts\Feeds\ById\Delete $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_ID), path: ['id' => $id]);
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/api/v1/listing-alerts/feeds/{id}',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            400 => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
            401 => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
            404 => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status403Response',
                'schemaNullable' => false,
            ],
            404 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\ListingAlerts\\Feeds\\ById\\Get\\FeedsByIdCollection',
    ];

    /**
     * Get alerts by feed (v1)
     *
     * Returns paginated list of alerts (by feed ID) for currently authenticated user.
     */
    public function getById(string $id, ?\CasafariSDK\GetParams\Api\V1\ListingAlerts\Feeds\ById $params = null): \CasafariSDK\Collections\Api\V1\ListingAlerts\Feeds\ById\Get\FeedsByIdCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\ListingAlerts\Feeds\ById\Get\FeedsByIdCollection $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id], parameters: $params);
        return $result;
    }

}
