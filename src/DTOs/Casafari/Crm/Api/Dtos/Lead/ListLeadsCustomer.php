<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsCustomer extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'DateOfBirth' => [
        'format' => 'date-time',
    ],
];

    public string $Address;
    /**
     * Format: date-time
     */
    public string $DateOfBirth {
        set {
            $this->assigning('DateOfBirth', $value);
            $this->DateOfBirth = $value;
        }
    }
    public string $EmailAddress;
    public string $IdentificationNumber;
    public string $Language;
    public string $MaritalStatus;
    public string $Name;
    public string $Nationality;
    public string $PhoneNumber;
    public string $TaxIdentificationNumber;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Address' => is_string($value) ? $this->Address = $value : parent::assignMember($name, $value),
            'DateOfBirth' => is_string($value) ? $this->DateOfBirth = $value : parent::assignMember($name, $value),
            'EmailAddress' => is_string($value) ? $this->EmailAddress = $value : parent::assignMember($name, $value),
            'IdentificationNumber' => is_string($value) ? $this->IdentificationNumber = $value : parent::assignMember($name, $value),
            'Language' => is_string($value) ? $this->Language = $value : parent::assignMember($name, $value),
            'MaritalStatus' => is_string($value) ? $this->MaritalStatus = $value : parent::assignMember($name, $value),
            'Name' => is_string($value) ? $this->Name = $value : parent::assignMember($name, $value),
            'Nationality' => is_string($value) ? $this->Nationality = $value : parent::assignMember($name, $value),
            'PhoneNumber' => is_string($value) ? $this->PhoneNumber = $value : parent::assignMember($name, $value),
            'TaxIdentificationNumber' => is_string($value) ? $this->TaxIdentificationNumber = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
