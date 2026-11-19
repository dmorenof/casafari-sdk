<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

/**
 * Property Location (CASAFARI)
 */
final class InnerLocationsElement extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'cityId' => [
        'format' => 'int32',
    ],
    'countryId' => [
        'format' => 'int32',
    ],
    'id' => [
        'format' => 'int32',
    ],
    'regionId' => [
        'format' => 'int32',
    ],
];

    /**
     * Format: int32
     */
    public int $cityId {
        set {
            $this->assigning('cityId', $value);
            $this->cityId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $countryId {
        set {
            $this->assigning('countryId', $value);
            $this->countryId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $name;
    /**
     * Format: int32
     */
    public int $regionId {
        set {
            $this->assigning('regionId', $value);
            $this->regionId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'cityId' => is_int($value) ? $this->cityId = $value : parent::assignMember($name, $value),
            'countryId' => is_int($value) ? $this->countryId = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'regionId' => is_int($value) ? $this->regionId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
