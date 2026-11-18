<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadEntity extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'Name',
];

    public string $Address;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\CountryISOEnum $CountryISO;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\CultureEnum $Culture;
    public string $Email;
    public string $Location;
    public string $Message;
    public string $Name;
    public string $Nationality;
    public string $Phone;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadProfile $Profile;
    public \CasafariSDK\Enums\Casafari\Crm\Api\Dtos\Lead\LeadEntity\TypeEnum $Type;

}
