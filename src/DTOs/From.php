<?php

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

/**
 * Casafari From object
 * <code>
 * {
 *     "Date": "2019-08-24T14:15:22Z",
 *     "Type": "Created"
 * }
 * </code>
 */
class From extends DTO
{
    public string $Date;
    public string $Type;
}