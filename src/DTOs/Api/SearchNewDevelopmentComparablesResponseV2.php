<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class SearchNewDevelopmentComparablesResponseV2 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'casafari_link',
    'estimated_prices',
    'gap',
    'results',
    'statistics',
];

    protected const array VALIDATION = [
    'casafari_link' => [
        'format' => 'uri',
        'pattern' => '^(?:[a-z0-9.+-]*)://(?:[^\\s:@/]+(?::[^\\s:@/]*)?@)?(?:(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)(?:\\.(?:0|25[0-5]|2[0-4][0-9]|1[0-9]?[0-9]?|[1-9][0-9]?)){3}|\\[[0-9a-f:.]+\\]|([a-z¡-￿0-9](?:[a-z¡-￿0-9-]{0,61}[a-z¡-￿0-9])?(?:\\.(?!-)[a-z¡-￿0-9-]{1,63}(?<!-))*\\.(?!-)(?:[a-z¡-￿-]{2,63}|xn--[a-z0-9]{1,59})(?<!-)\\.?|localhost))(?::[0-9]{1,5})?(?:[/?#][^\\s]*)?\\z',
    ],
];

    /**
     * Not supported for new developments, always `null`.
     * Format: uri
     */
    public ?string $casafari_link {
        set {
            $this->assigning('casafari_link', $value);
            $this->casafari_link = $value;
        }
    }
    /**
     * Array of found DVF data (Request for geolocated property values).
     */
    public \CasafariSDK\Collections\Api\SearchNewDevelopmentComparablesResponseV2\DvfResultsCollection $dvf_results;
    /**
     * Estimated prices calculated based on the found comparables (for `operation` defined in the request).
     */
    public ?\CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2\EstimatedPricesDTO $estimated_prices;
    /**
     * New development vs resale asking price per square meter gap, `null` unless `include_gap` is `true`. It is an observation only and is not applied to `estimated_prices`.
     */
    public ?\CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2\GapDTO $gap;
    /**
     * Array of found new development unit comparables, the units of the target unit project first.
     */
    public \CasafariSDK\Collections\Api\SearchNewDevelopmentComparablesResponseV2\ResultsCollection $results;
    /**
     * Statistics information for the found comparables (for `operation` defined in the request).
     */
    public ?\CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesResponseV2\StatisticsDTO $statistics;
    public ?\CasafariSDK\Collections\Api\SearchNewDevelopmentComparablesResponseV2\TransactionalDataCollection $transactional_data;
    /**
     * Not supported for new developments, always `null`.
     */
    public ?int $valuation_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'casafari_link' => $value === null || is_string($value) ? $this->casafari_link = $value : parent::assignMember($name, $value),
            'valuation_id' => $value === null || is_int($value) ? $this->valuation_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
