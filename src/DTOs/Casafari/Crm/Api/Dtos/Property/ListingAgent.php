<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property;

final class ListingAgent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'id' => [
        'format' => 'int32',
    ],
];

    public bool $Active;
    public string $Cellphone;
    public string $Email;
    public bool $IsPrimaryAgent;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\ListingAgent\LocaleCollection $Locale;
    public string $Name;
    public string $Phone;
    public string $Photo;
    /**
     * Format: int32
     */
    public int $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Active' => is_bool($value) ? $this->Active = $value : parent::assignMember($name, $value),
            'Cellphone' => is_string($value) ? $this->Cellphone = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'IsPrimaryAgent' => is_bool($value) ? $this->IsPrimaryAgent = $value : parent::assignMember($name, $value),
            'Locale' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->Locale = new \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Property\ListingAgent\LocaleCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Property\AgentLocale::class)) : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Phone' => is_string($value) ? $this->Phone = $value : parent::assignMember($name, $value),
            'Photo' => is_string($value) ? $this->Photo = $value : parent::assignMember($name, $value),
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
