<?php
declare(strict_types=1);

namespace CasafariSDK\Resources\AlertsApi;

final class Feeds extends \CasafariSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/alerts-api/feeds',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\FeedList\\ResponseSchema',
    ];

    /**
     * List feeds
     *
     * Returns a paginated list of feeds, sorted newest first. Follow `next_url` directly to get the next page - it is an opaque URL, do not construct it manually.
     */
    public function get(?\CasafariSDK\GetParams\AlertsApi\Feeds $params = null): \CasafariSDK\DTOs\AlertsApi\FeedList\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\FeedList\ResponseSchema $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/alerts-api/feeds',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            409 => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            409 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\FeedDetail\\ResponseSchema',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\CreateAlertFeed\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create feed
     *
     * Create a new alert feed that delivers matching real estate events to your webhook URL.
     *
     * ## Alert Delivery Format
     *
     * Events are delivered as a **POST** request with a single JSON object body:
     *
     * ```json
     * {
     *   "alert_id": 123456,
     *   "listing_id": 987654321,
     *   "ref": "REF-001",
     *   "alert_type": "sale_price",
     *   "alert_subtype": "price_up",
     *   "old_value": "450000",
     *   "new_value": "470000",
     *   "alert_date_and_time": "2026-06-21T16:33:48",
     *   "property_url": "https://www.casafari.com/home-sale/property-123456",
     *   "url": "https://example.com/listings/123456",
     *   "listing_uid": "listing-uid-123",
     *   "property_id": 123456,
     *   "property_unit_id": 0,
     *   "title": "Beautiful 3 bedroom apartment",
     *   "type": "apartment",
     *   "type_group": "apartment",
     *   "location": {
     *     "location_id": 1,
     *     "name": "Lisbon",
     *     "administrative_level": "city",
     *     "zip_codes": [
     *       "1000-001"
     *     ]
     *   },
     *   "locations_structure": [
     *     {
     *       "location_id": 1,
     *       "name": "Lisbon",
     *       "administrative_level": "city",
     *       "zip_codes": []
     *     },
     *     {
     *       "location_id": 2,
     *       "name": "Portugal",
     *       "administrative_level": "country",
     *       "zip_codes": []
     *     }
     *   ],
     *   "address": "Rua Example 123",
     *   "zip_code": "1000-001",
     *   "cadastral_reference": "1234567890123",
     *   "coordinates": {
     *     "latitude": 38.7223,
     *     "longitude": -9.1393
     *   },
     *   "condition": "used",
     *   "contacts_info": {
     *     "name": "John Doe",
     *     "email": "john&#64;example.com",
     *     "phone": "+351912345678"
     *   },
     *   "total_area": 120,
     *   "living_area": 100,
     *   "plot_area": 200,
     *   "terrace_area": 15,
     *   "bedrooms": 3,
     *   "rooms": 5,
     *   "bathrooms": 2,
     *   "features": {
     *     "floor": "middle",
     *     "orientation": "exterior",
     *     "views": [
     *       "city"
     *     ],
     *     "directions": [
     *       "north"
     *     ],
     *     "characteristics": [
     *       "balcony",
     *       "elevator"
     *     ]
     *   },
     *   "construction_year": 2015,
     *   "operations": [
     *     "sale"
     *   ],
     *   "is_bank_property": false,
     *   "is_auction_property": false,
     *   "is_new_development_property": false,
     *   "is_private_property": true,
     *   "sale_status": "active",
     *   "sale_currency": "EUR",
     *   "sale_price_base": 450000,
     *   "sale_price": 450000,
     *   "sale_price_per_sqm": 3750.0,
     *   "sale_price_per_sqm_base": 3750.0,
     *   "rent_status": "none",
     *   "rent_currency": "EUR",
     *   "rent_price_base": 1500,
     *   "rent_price": 1500,
     *   "rent_price_per_sqm": 12.5,
     *   "rent_price_per_sqm_base": 12.5,
     *   "rent_period": "month",
     *   "agency_legal_id": "PT123456789",
     *   "agency": "Casafari Realty",
     *   "agent": "Jane Smith",
     *   "source_name": "idealista",
     *   "description": "A lovely apartment in the heart of the city.",
     *   "thumbnails": [
     *     "https://img.example.com/thumb1.jpg",
     *     "https://img.example.com/thumb2.jpg"
     *   ],
     *   "pictures": [
     *     "https://img.example.com/pic1.jpg",
     *     "https://img.example.com/pic2.jpg"
     *   ],
     *   "created_at": "2026-06-21T14:58:05.525958",
     *   "created_at_with_photos": "2026-06-21T14:58:05.525958",
     *   "updated_at": "2026-06-21T14:58:05.525958",
     *   "energy_rating": "B",
     *   "heating_type": "gas",
     *   "available_from": "2026-07-01",
     *   "available_to": "2026-07-01",
     *   "matched_feeds": [
     *     {
     *       "feed_id": 42,
     *       "feed_name": "My Alert Feed"
     *     }
     *   ]
     * }
     * ```
     *
     * Your server must respond with HTTP **200**. Any other status code is treated as a failure.
     *
     * ## Before You Start: Configure Your Webhook
     *
     * Feeds deliver to your **per-user webhook URL** — one URL for all feeds, managed separately:
     *
     * 1. `PUT /webhooks` — set your delivery URL (it is probed with a GET and must answer 200)
     * 2. Create feeds — this endpoint returns **409** until the webhook is configured
     *
     * Changing the URL via `PUT /webhooks` instantly affects all feeds, including already-queued alerts.
     *
     * ## Retry Policy
     *
     * If your server does not respond with HTTP 200 within **5 seconds**, delivery is retried —
     * **60 seconds** after the first failure, then every **10 minutes** — until the alert expires
     * (typically 24h). Feeds are never disabled automatically.
     *
     * ## Authentication of deliveries
     *
     * Every delivery is signed with [Standard Webhooks](https://www.standardwebhooks.com/): each POST
     * carries `webhook-id`, `webhook-timestamp`, and `webhook-signature` headers. Verify the
     * HMAC-SHA256 signature over the raw request body using the secret from `PUT /webhooks`
     * (rotate it via `POST /webhooks/rotate-secret`).
     */
    public function post(\CasafariSDK\DTOs\AlertsApi\CreateAlertFeed\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\FeedDetail\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\FeedDetail\ResponseSchema $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

    private const array DELETE_BY_FEED_ID = [
        'method' => 'DELETE',
        'path' => '/alerts-api/feeds/{feed_id}',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            404 => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\Success\\ResponseSchema',
    ];

    /**
     * Delete feed
     *
     * Permanently removes the feed. No further alerts will be delivered for it.
     */
    public function deleteByFeedId(int $feed_id): \CasafariSDK\DTOs\AlertsApi\Success\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\Success\ResponseSchema $result */
        $result = $this->executeArguments(self::operation(self::DELETE_BY_FEED_ID), path: ['feed_id' => $feed_id]);
        return $result;
    }

    private const array GET_BY_FEED_ID = [
        'method' => 'GET',
        'path' => '/alerts-api/feeds/{feed_id}',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            404 => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\FeedDetail\\ResponseSchema',
    ];

    /**
     * Get feed
     *
     * Returns the feed configuration in the same format as it was originally created. Filters that were not set at creation time are omitted entirely (not returned as null); filters explicitly set to null are returned as null.
     */
    public function getByFeedId(int $feed_id): \CasafariSDK\DTOs\AlertsApi\FeedDetail\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\FeedDetail\ResponseSchema $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_FEED_ID), path: ['feed_id' => $feed_id]);
        return $result;
    }

    private const array PUT_BY_FEED_ID = [
        'method' => 'PUT',
        'path' => '/alerts-api/feeds/{feed_id}',
        'security' => [
            [
                'HTTPBearer' => [],
            ],
            [
                'OAuth2ClientCredentials' => [],
            ],
        ],
        'errors' => [
            404 => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
            422 => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\ErrorDetailSchema',
                'schemaNullable' => false,
            ],
            422 => [
                'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\HTTPValidationError',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\CasafariSDK\\DTOs\\AlertsApi\\FeedDetail\\ResponseSchema',
        'requestBody' => [
            'type' => '\\CasafariSDK\\DTOs\\AlertsApi\\CreateAlertFeed\\RequestSchema',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update feed
     *
     * Replaces the feed configuration. The body is the same as for feed creation — both `feed_name` and `filters` are required, and `filters` replaces the previous set entirely: any filter you omit is dropped, not kept. Send the full set every time; `GET /feeds/{feed_id}` returns it in exactly the format this endpoint accepts.
     *
     * Matching switches to the new filters as soon as the call returns. Alerts already queued for delivery are unaffected and still carry the feed name they matched under.
     */
    public function putByFeedId(int $feed_id, \CasafariSDK\DTOs\AlertsApi\CreateAlertFeed\RequestSchema $payload): \CasafariSDK\DTOs\AlertsApi\FeedDetail\ResponseSchema
    {
        /** @var \CasafariSDK\DTOs\AlertsApi\FeedDetail\ResponseSchema $result */
        $result = $this->executeBody(self::operation(self::PUT_BY_FEED_ID), $payload, path: ['feed_id' => $feed_id]);
        return $result;
    }

}
