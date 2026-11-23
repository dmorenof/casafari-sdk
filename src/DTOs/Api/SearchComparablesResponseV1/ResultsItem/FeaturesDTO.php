<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchComparablesResponseV1\ResultsItem;

/**
 * Property features, as returned by the [GET /api/v1/references/features](/#operation/api__get__v1__references__features) endpoint.
 */
final class FeaturesDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'characteristics',
    'direction',
    'directions',
    'floor',
    'orientation',
    'view',
    'views',
];

    /**
     * Property characteristics.
     */
    public ?\CasafariSDK\Collections\Api\SearchComparablesResponseV1\ResultsItem\Features\CharacteristicsCollection $characteristics;
    /**
     * Cardinal direction the property faces. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `directions` field instead.</strong>
     */
    public ?\CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\DirectionEnum $direction;
    /**
     * List of cardinal directions the property faces.
     */
    public ?\CasafariSDK\Collections\Api\SearchComparablesResponseV1\ResultsItem\Features\DirectionsCollection $directions;
    /**
     * Floor type.
     */
    public ?\CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\FloorEnum $floor;
    /**
     * Property view orientation.
     */
    public ?\CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\OrientationEnum $orientation;
    /**
     * View from the property. <br/><strong>This field is deprecated and will be removed in the next major update.</strong><br/><strong>Please, use `views` field instead.</strong>
     */
    public ?\CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\ViewEnum $view;
    /**
     * List of views from the property.
     */
    public ?\CasafariSDK\Collections\Api\SearchComparablesResponseV1\ResultsItem\Features\ViewsCollection $views;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'direction' => $value === null || is_string($value) ? $this->direction = $value === null ? null : \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\DirectionEnum::from($value) : parent::assignMember($name, $value),
            'floor' => $value === null || is_string($value) ? $this->floor = $value === null ? null : \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\FloorEnum::from($value) : parent::assignMember($name, $value),
            'orientation' => $value === null || is_string($value) ? $this->orientation = $value === null ? null : \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\OrientationEnum::from($value) : parent::assignMember($name, $value),
            'view' => $value === null || is_string($value) ? $this->view = $value === null ? null : \CasafariSDK\Enums\Api\SearchComparablesResponseV1\ResultsItem\Features\ViewEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
