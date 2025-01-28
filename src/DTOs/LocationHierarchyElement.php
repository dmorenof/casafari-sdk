<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

class LocationHierarchyElement extends DTO
{
    public int $id;
    public int $parent_id;
    public string $name;
    public int $level;
}