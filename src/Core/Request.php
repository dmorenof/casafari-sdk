<?php

namespace CasafariSDK\Core;

/**
 * Represents a base request data transfer object.
 *
 * Stores key information about a request, including identifiers, timestamps, and language details.
 */
class Request extends DTO
{
    public string $CorrelationId;
    public string $EchoToken;
    public int $PrimaryLangId;
    public bool $RetransmissionIndicator;
    public string $TimeStamp;
    public float $Version;
}