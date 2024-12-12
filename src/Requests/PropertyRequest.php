<?php

namespace CasafariSDK\Requests;

use CasafariSDK\TypedArrays\PropertiesArray;

class PropertyRequest
{
    public PropertiesArray $Properties;
    public string $CorrelationId;
    public string $EchoToken;
    public int $PrimaryLangId;
    public bool $RetransmissionIndicator;
    public string $TimeStamp;
    public float $Version;
}