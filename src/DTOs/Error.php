<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\DTOs;

use CasafariSDK\Core\DTO;

/**
 * Casafari Error object
 * <code>
 * {
 *     "Code": 0,
 *     "ShortText": "string"
 * }
 * </code>
 */
class Error extends DTO
{
    public int $Code;
    public string $ShortText;
}