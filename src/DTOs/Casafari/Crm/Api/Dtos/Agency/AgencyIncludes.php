<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Agency;

final class AgencyIncludes extends \Dmorenof\SdkRuntime\DTO
{
    public bool $IncludeBrokers;
    public bool $IncludeHierarchies;
    public bool $IncludeLocales;
    public bool $IncludePhotos;

}
