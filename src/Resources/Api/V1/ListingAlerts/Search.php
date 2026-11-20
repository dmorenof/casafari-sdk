<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\Api\V1\ListingAlerts;

final class Search extends \CasafariSDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/api/v1/listing-alerts/search',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            400 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Search\\PostStatus400Response',
            401 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Search\\PostStatus401Response',
            403 => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Search\\PostStatus403Response',
        ],
        'errorResponses' => [
            400 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Search\\PostStatus400Response',
                'schemaNullable' => false,
            ],
            401 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Search\\PostStatus401Response',
                'schemaNullable' => false,
            ],
            403 => [
                'type' => '\\CasafariSDK\\Responses\\Errors\\Api\\V1\\ListingAlerts\\Search\\PostStatus403Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\Collections\\Api\\V1\\ListingAlerts\\Search\\Post\\ListingAlertsSearchCollection',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\Api\\AlertsSearchFilterV1',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Search alerts (v1)
     *
     * Returns paginated list of alerts (by requested parameters) for currently authenticated user.
     */
    public function post(?\CasafariSDK\PostParams\Api\V1\ListingAlerts\Search $params = null): \CasafariSDK\Collections\Api\V1\ListingAlerts\Search\Post\ListingAlertsSearchCollection
    {
        /** @var \CasafariSDK\Collections\Api\V1\ListingAlerts\Search\Post\ListingAlertsSearchCollection $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
