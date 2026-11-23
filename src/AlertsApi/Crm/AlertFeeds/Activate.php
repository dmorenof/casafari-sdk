<?php

declare(strict_types=1);

namespace CasafariSDK\AlertsApi\Crm\AlertFeeds;

final class Activate extends \CasafariSDK\CasafariAPISDK
{
    /** POST /alerts-api/crm/alert-feeds/activate [operationId: alerts-api__post__crm__alert-feeds__activate] */
    /**
     * Activate feeds
     *
     * Starts delivering the given feeds to your CRM webhook. Send the IDs of the feeds you want to receive,
     * and they switch to active. After you activate a feed for a user, all new feeds of that user are
     * activated automatically too. This works separately for each user: if a user has no active feeds,
     * their new feeds stay inactive. Feeds created before the first activation don't change. To deliver
     * them, activate them with this endpoint. To stop delivering a feed, use **Deactivate feeds**.
     *
     * All-or-nothing request. If any feed ID in `feed_ids` doesn't exist in your company, the API returns
     * 404 with `"detail": "Feeds not found."` and no feeds are activated, including the valid ones. Send
     * only the IDs of existing feeds.
     *
     * ## Alert Delivery Format
     *
     * Alerts are delivered to your CRM webhook as a **POST** request with a single
     * JSON object body.
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
     *       "feed_id": "000000000000000000000f01",
     *       "feed_name": "Lisbon Apartments",
     *       "user_id": "000000000000000000000a01"
     *     },
     *     {
     *       "feed_id": "000000000000000000000f02",
     *       "feed_name": "Lisbon Price Drops",
     *       "user_id": "000000000000000000000a02"
     *     }
     *   ]
     * }
     * ```
     *
     * Your server must respond with an HTTP **2xx** status. Anything else is treated as a failure.
     *
     * ## Retry Policy
     *
     * If your server does not respond with 2xx within **5 seconds**, delivery is retried —
     * **60 seconds** after the first failure, then every **10 minutes** — until the alert expires
     * (typically 24h).
     *
     * The same alert may arrive more than once: after a retry, or when its matches reach us at different
     * times and are delivered separately. Deduplicate by `alert_id` and merge `matched_feeds` rather than
     * overwrite them. Delivery order is not guaranteed.
     *
     * ## Authentication of deliveries
     *
     * Every delivery is signed with [Standard Webhooks](https://www.standardwebhooks.com/): each POST
     * carries `webhook-id`, `webhook-timestamp`, and `webhook-signature` headers. Verify the
     * HMAC-SHA256 signature over the raw request body using the secret from `PUT /crm/webhook`
     * (rotate it via `POST /crm/webhook/rotate-secret`).
     */
    public static function post(\CasafariSDK\DTOs\AlertsApi\CrmFeedIds\RequestSchema $payload): void
    {
        self::client()->resource(\CasafariSDK\Resources\AlertsApi\Crm\AlertFeeds\Activate::class)->post($payload);
    }

}
