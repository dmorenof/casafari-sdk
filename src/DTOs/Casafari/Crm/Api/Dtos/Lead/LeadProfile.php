<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead;

final class LeadProfile extends \Dmorenof\SdkRuntime\DTO
{
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $Bathrooms;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $Bedrooms;
    public \CasafariSDK\Collections\StringCollection $Cities;
    public bool $ForceNewProfileToExistingContact;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $HouseArea;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $LandArea;
    public \CasafariSDK\Collections\StringCollection $Localities;
    public string $Note;
    public \CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Lead\LeadFromTo $Price;
    public \CasafariSDK\Collections\Casafari\Crm\Api\Dtos\Lead\LeadProfile\PropertyTypeCollection $PropertyType;
    public \CasafariSDK\Collections\StringCollection $Regions;
    public \CasafariSDK\Collections\StringCollection $Zone;

}
