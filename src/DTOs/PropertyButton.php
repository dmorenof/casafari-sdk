<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

class PropertyButton extends DTO
{
    public int $id;
    public string $text;
    public string $backgroundColor;
    public string $foregroundColor;
}