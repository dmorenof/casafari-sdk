<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;
use CasafariSDK\TypedArrays\StringsArray;

/**
 * Casafari Details object
 * <code>
 * {
 *     "Name": ["string, "string"],
 *     "CategoryInnerText": "string",
 *     "CategoryId": 0
 * }
 * </code>
 */
class DetailsObject extends DTO
{
    public StringsArray $Name;
    public string $CategoryInnerText;
    public int $CategoryId;
}