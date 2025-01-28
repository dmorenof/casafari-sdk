<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
use CasafariSDK\TypedArrays\AgentLocalesArray;

class ListingAgent extends DTO
{
    public int $id;
    public string $Name;
    public string $Email;
    public string $Phone;
    public string $Cellphone;
    public string $Photo;
    public AgentLocalesArray $Locale;
    public bool $Active;
    public bool $IsPrimaryAgent;
}