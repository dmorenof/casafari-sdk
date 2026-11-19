<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\CreditMediator;

final class CreditMediatorsDto extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'CityId' => [
        'format' => 'int32',
    ],
    'CountryId' => [
        'format' => 'int32',
    ],
    'CreditMediatorId' => [
        'format' => 'int32',
    ],
    'DistrictId' => [
        'format' => 'int32',
    ],
    'LocalityId' => [
        'format' => 'int32',
    ],
    'UserId' => [
        'format' => 'int32',
    ],
];

    public string $AMI;
    public string $Address;
    /**
     * Format: int32
     */
    public int $CityId {
        set {
            $this->assigning('CityId', $value);
            $this->CityId = $value;
        }
    }
    /**
     * Format: int32
     */
    public int $CountryId {
        set {
            $this->assigning('CountryId', $value);
            $this->CountryId = $value;
        }
    }
    public string $Courtname;
    public string $CreditCompanyName;
    /**
     * Format: int32
     */
    public int $CreditMediatorId {
        set {
            $this->assigning('CreditMediatorId', $value);
            $this->CreditMediatorId = $value;
        }
    }
    public string $CreditMediatorLicense;
    public string $CreditMediatorName;
    /**
     * Format: int32
     */
    public int $DistrictId {
        set {
            $this->assigning('DistrictId', $value);
            $this->DistrictId = $value;
        }
    }
    public string $Email;
    public string $GMapLat;
    public string $GMapLot;
    public string $InsuranceCompany;
    public string $InsuranceContractID;
    /**
     * Format: double
     */
    public float $InsuranceValue;
    /**
     * Format: int32
     */
    public int $LocalityId {
        set {
            $this->assigning('LocalityId', $value);
            $this->LocalityId = $value;
        }
    }
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location\LocationDto $Location;
    public string $ManagingPartner;
    public string $MobilePhone;
    public string $OfficeHours;
    public string $Phone;
    /**
     * Format: double
     */
    public float $SocialCapital;
    public string $TaxPayerNumber;
    /**
     * Format: int32
     */
    public int $UserId {
        set {
            $this->assigning('UserId', $value);
            $this->UserId = $value;
        }
    }
    public string $ZipCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'AMI' => is_string($value) ? $this->AMI = $value : parent::assignMember($name, $value),
            'Address' => is_string($value) ? $this->Address = $value : parent::assignMember($name, $value),
            'CityId' => is_int($value) ? $this->CityId = $value : parent::assignMember($name, $value),
            'CountryId' => is_int($value) ? $this->CountryId = $value : parent::assignMember($name, $value),
            'Courtname' => is_string($value) ? $this->Courtname = $value : parent::assignMember($name, $value),
            'CreditCompanyName' => is_string($value) ? $this->CreditCompanyName = $value : parent::assignMember($name, $value),
            'CreditMediatorId' => is_int($value) ? $this->CreditMediatorId = $value : parent::assignMember($name, $value),
            'CreditMediatorLicense' => is_string($value) ? $this->CreditMediatorLicense = $value : parent::assignMember($name, $value),
            'CreditMediatorName' => is_string($value) ? $this->CreditMediatorName = $value : parent::assignMember($name, $value),
            'DistrictId' => is_int($value) ? $this->DistrictId = $value : parent::assignMember($name, $value),
            'Email' => is_string($value) ? $this->Email = $value : parent::assignMember($name, $value),
            'GMapLat' => is_string($value) ? $this->GMapLat = $value : parent::assignMember($name, $value),
            'GMapLot' => is_string($value) ? $this->GMapLot = $value : parent::assignMember($name, $value),
            'InsuranceCompany' => is_string($value) ? $this->InsuranceCompany = $value : parent::assignMember($name, $value),
            'InsuranceContractID' => is_string($value) ? $this->InsuranceContractID = $value : parent::assignMember($name, $value),
            'InsuranceValue' => is_float($value) ? $this->InsuranceValue = $value : parent::assignMember($name, $value),
            'LocalityId' => is_int($value) ? $this->LocalityId = $value : parent::assignMember($name, $value),
            'Location' => $value instanceof \stdClass ? $this->Location = new \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Location\LocationDto($value) : parent::assignMember($name, $value),
            'ManagingPartner' => is_string($value) ? $this->ManagingPartner = $value : parent::assignMember($name, $value),
            'MobilePhone' => is_string($value) ? $this->MobilePhone = $value : parent::assignMember($name, $value),
            'OfficeHours' => is_string($value) ? $this->OfficeHours = $value : parent::assignMember($name, $value),
            'Phone' => is_string($value) ? $this->Phone = $value : parent::assignMember($name, $value),
            'SocialCapital' => is_float($value) ? $this->SocialCapital = $value : parent::assignMember($name, $value),
            'TaxPayerNumber' => is_string($value) ? $this->TaxPayerNumber = $value : parent::assignMember($name, $value),
            'UserId' => is_int($value) ? $this->UserId = $value : parent::assignMember($name, $value),
            'ZipCode' => is_string($value) ? $this->ZipCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
