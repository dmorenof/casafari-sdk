<?php

declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesRequestV2\LocationBoundary\Circle;

/**
 * Target point to search around. Can be defined as coordinates, address, cadastral reference of the property or a new development unit (`property_id` and `property_unit_id`). Only one value should be provided.
 */
final class TargetPointDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'property_id' => [
        'minimum' => 1.0,
    ],
    'property_unit_id' => [
        'minimum' => 1.0,
    ],
];

    /**
     * Address of the property to define the point to search around.
     */
    public string $address;
    /**
     * Cadastral reference of the property to define the point to search around. <br/>For now available only for Spain.
     */
    public \CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesRequestV2\LocationBoundary\Circle\TargetPoint\CadastralReferenceDTO $cadastral_reference;
    /**
     * Target point coordinates to search around.
     */
    public \CasafariSDK\DTOs\Api\SearchNewDevelopmentComparablesRequestV2\LocationBoundary\Circle\TargetPoint\CoordinatesDTO $coordinates;
    /**
     * ID of the new development project. Must be provided together with `property_unit_id`.
     */
    public int $property_id {
        set {
            $this->assigning('property_id', $value);
            $this->property_id = $value;
        }
    }
    /**
     * ID of the unit inside the new development project. Must be provided together with `property_id`.
     */
    public int $property_unit_id {
        set {
            $this->assigning('property_unit_id', $value);
            $this->property_unit_id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            'property_id' => is_int($value) ? $this->property_id = $value : parent::assignMember($name, $value),
            'property_unit_id' => is_int($value) ? $this->property_unit_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
