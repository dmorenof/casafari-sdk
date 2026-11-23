<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Api\PropertiesSearchRequestV2\CustomLocationBoundary\Circle;

/**
 * Target point to search around. Can be defined as coordinates, address or cadastral reference of the property. Only one value should be provided.
 */
final class TargetPointDTO extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Address of the property to define the point to search around.
     */
    public string $address;
    /**
     * Cadastral reference of the property to define the point to search around. <br/>For now available only for Spain.
     */
    public \CasafariSDK\DTOs\Api\PropertiesSearchRequestV2\CustomLocationBoundary\Circle\TargetPoint\CadastralReferenceDTO $cadastral_reference;
    /**
     * Target point coordinates to search around.
     */
    public \CasafariSDK\DTOs\Api\PropertiesSearchRequestV2\CustomLocationBoundary\Circle\TargetPoint\CoordinatesDTO $coordinates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => is_string($value) ? $this->address = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
