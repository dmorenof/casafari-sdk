<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

class AgentLocale extends DTO
{
    public string $language;
    public string $title;
    public string $description;
    public string $short;
    public string $seokeywords;
    public string $seodescription;
}