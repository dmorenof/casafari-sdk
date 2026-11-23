<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\TypeAheadV1;

final class TypeaheadDTO extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'administrative_level',
    'breadcrumbs',
    'location_id',
    'matched_name',
    'name',
];

    protected const array VALIDATION = [
    'matched_name' => [
        'maxLength' => 256,
    ],
];

    /**
     * The administrative level.
     */
    public ?string $administrative_level;
    /**
     * Location breadcrumbs sorted from top to bottom.
     */
    public \CasafariSDK\Collections\Api\TypeAheadV1\TypeaheadItem\BreadcrumbsCollection $breadcrumbs;
    /**
     * The location id.
     */
    public int $location_id;
    /**
     * The matched name of the location name.
     */
    public string $matched_name {
        set {
            $this->assigning('matched_name', $value);
            $this->matched_name = $value;
        }
    }
    /**
     * The location name.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'administrative_level' => $value === null || is_string($value) ? $this->administrative_level = $value : parent::assignMember($name, $value),
            'location_id' => is_int($value) ? $this->location_id = $value : parent::assignMember($name, $value),
            'matched_name' => is_string($value) ? $this->matched_name = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
