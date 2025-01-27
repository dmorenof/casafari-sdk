<?php

namespace CasafariSDK\Core;

use CasafariSDK\TypedArrays\ErrorsArray;

/**
 * Represents the base response object with information about the success, errors, warnings, and additional metadata.
 *
 * The Response class includes properties for success state, errors, warnings, and related metadata for tracing and transmission purposes.
 */
class Response extends DTO
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