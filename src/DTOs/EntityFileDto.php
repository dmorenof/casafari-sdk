<?php

namespace CasafariSDK\DTOs;

/**
 * EntityFileDto: typed representation of Casafari.Crm.Api.Dtos.Entity.EntityFileDto.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class EntityFileDto extends \CasafariSDK\Core\DTO
{
    public int $EntityFileID;
    public int $EntityID;
    public bool $isPhoto;
    public int $SortOrder;
    public string $Filename;
}
