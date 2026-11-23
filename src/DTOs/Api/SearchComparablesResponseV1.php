<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api;

final class SearchComparablesResponseV1 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'casafari_link',
    'estimated_prices',
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
     * Link to Comparative Market Analysis page.
     * Format: uri
     */
    public ?string $casafari_link {
        set {
            $this->assigning('casafari_link', $value);
            $this->casafari_link = $value;
        }
    }
    /**
     * Estimated prices calculated based on the found comparables (for `operation` defined in the request).
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV1\EstimatedPricesDTO $estimated_prices;
    /**
     * Array of found comparable properties.
     */
    public \CasafariSDK\Collections\Api\SearchComparablesResponseV1\ResultsCollection $results;
    /**
     * Statistics information for the found comparables (for `operation` defined in the request).
     */
    public ?\CasafariSDK\DTOs\Api\SearchComparablesResponseV1\StatisticsDTO $statistics;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'casafari_link' => $value === null || is_string($value) ? $this->casafari_link = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
