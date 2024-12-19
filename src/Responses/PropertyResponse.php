<?php

namespace CasafariSDK\Responses;

use CasafariSDK\Core\Response;
use CasafariSDK\TypedArrays\PropertiesArray;

/**
 * Casafari Property Response Object
 *
 * <code>
 * {
 *     "Properties": [],
 *     "Success": { },
 *     "Errors": [],
 *     "Warnings": [],
 *     "CorrelationId": "string",
 *     "EchoToken": "string",
 *     "PrimaryLangId": 0,
 *     "RetransmissionIndicator": true,
 *     "TimeStamp": "string",
 *     "Version": 0.1
 * }
 * </code>
 *
 * @noinspection PhpUnused
 */
class PropertyResponse extends Response
{
    public PropertiesArray $Properties;
}