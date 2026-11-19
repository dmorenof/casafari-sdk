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

}
