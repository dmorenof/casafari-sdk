<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\Entities;

use CasafariSDK\Core\Entity;

/**
 * Casafari Error object
 * <code>
 * {
 *     "Code": 0,
 *     "ShortText": "string"
 * }
 * </code>
 */
class Error extends Entity
{
    public int $Code;
    public string $ShortText;
}