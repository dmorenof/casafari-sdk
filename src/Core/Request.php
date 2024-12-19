<?php

namespace CasafariSDK\Core;

class Request extends Entity
{
    public string $CorrelationId;
    public string $EchoToken;
    public int $PrimaryLangId;
    public bool $RetransmissionIndicator;
    public string $TimeStamp;
    public float $Version;
}