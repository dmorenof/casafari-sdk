<?php
/**
 * @noinspection SpellCheckingInspection
 * @noinspection PhpUnused
 */

namespace CasafariSDK\Entities;

/**
 * Casafari Error object
 * <code>
 * {
 *     "Code": 0,
 *     "ShortText": "string"
 * }
 * </code>
 */
class Error
{
    public int $Code;
    public string $ShortText;
}