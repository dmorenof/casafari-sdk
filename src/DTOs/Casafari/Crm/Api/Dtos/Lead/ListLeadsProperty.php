<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class ListLeadsProperty extends \Dmorenof\SdkRuntime\DTO
{
    public string $Address;
    public string $Comission;
    public string $ComissionPercentage;
    public string $GrossArea;
    public string $LandArea;
    public string $LastUpdate;
    public string $Price;
    public string $PropertyID;
    public string $Reference;
    public string $SurfaceArea;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'Address' => is_string($value) ? $this->Address = $value : parent::assignMember($name, $value),
            'Comission' => is_string($value) ? $this->Comission = $value : parent::assignMember($name, $value),
            'ComissionPercentage' => is_string($value) ? $this->ComissionPercentage = $value : parent::assignMember($name, $value),
            'GrossArea' => is_string($value) ? $this->GrossArea = $value : parent::assignMember($name, $value),
            'LandArea' => is_string($value) ? $this->LandArea = $value : parent::assignMember($name, $value),
            'LastUpdate' => is_string($value) ? $this->LastUpdate = $value : parent::assignMember($name, $value),
            'Price' => is_string($value) ? $this->Price = $value : parent::assignMember($name, $value),
            'PropertyID' => is_string($value) ? $this->PropertyID = $value : parent::assignMember($name, $value),
            'Reference' => is_string($value) ? $this->Reference = $value : parent::assignMember($name, $value),
            'SurfaceArea' => is_string($value) ? $this->SurfaceArea = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
