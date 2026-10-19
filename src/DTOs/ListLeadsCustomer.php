<?php

namespace CasafariSDK\DTOs;

/**
 * ListLeadsCustomer: typed representation of Casafari.Crm.Api.Dtos.Lead.ListLeadsCustomer.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class ListLeadsCustomer extends \CasafariSDK\Core\DTO
{
    public string $Name;
    public string $EmailAddress;
    public string $PhoneNumber;
    public string $Language;
    public string $TaxIdentificationNumber;
    public string $Nationality;
    public string $DateOfBirth;
    public string $MaritalStatus;
    public string $IdentificationNumber;
    public string $Address;
}
