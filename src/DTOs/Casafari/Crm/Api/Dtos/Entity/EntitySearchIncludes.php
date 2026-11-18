<?php
declare(strict_types=1);

namespace CasafariSDK\DTOs\Casafari\Crm\Api\Dtos\Entity;

final class EntitySearchIncludes extends \Dmorenof\SdkRuntime\DTO
{
    public bool $IncludeAgencies;
    public bool $IncludeAgenciesLocales;
    public bool $IncludeEntityFiles;
    public bool $IncludeLocales;

}
