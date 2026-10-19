<?php

namespace CasafariSDK\DTOs;

/**
 * IdValueModel: typed representation of Casafari.Crm.Api.Dtos.IdValueModel.
 * Schema: src/Core/v1.json (CRM API v1 snapshot).
 */
class IdValueModel extends \CasafariSDK\Core\DTO
{
    public int $ParentId;
    public int $Id;
    public string $Value;
}
