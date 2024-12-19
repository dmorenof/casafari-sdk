<?php

namespace CasafariSDK\Core;

use CasafariSDK\TypedArrays\ErrorsArray;

class Response extends Entity
{
    public object $Success;
    public ErrorsArray $Errors;
    public ErrorsArray $Warnings;
    public string $CorrelationId;
    public string $EchoToken;
    public int $PrimaryLangId;
    public bool $RetransmissionIndicator;
    public string $TimeStamp;
    public float $Version;
}