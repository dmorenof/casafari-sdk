<?php

namespace CasafariSDK\DTOs;

/**
 * UserPortalDto: typed representation of Casafari.Crm.Api.Dtos.User.UserPortalDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class UserPortalDto extends \CasafariSDK\Core\DTO
{
    public int $UserID;
    public int $PortalID;
    public int $MaxProperties;
    public string $PortalLogo;
    public bool $ManagerOnly;
}
